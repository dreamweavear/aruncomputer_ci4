<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Traits\WhatsAppTrait;

class BulkMessage extends BaseController
{
    use WhatsAppTrait;

    // Supported templates and their variable definitions
    private const TEMPLATES = [
        'seasonal_greetings' => [
            'label'     => 'Seasonal Greetings',
            'variables' => ['name', 'occasion'],
            'source'    => 'both',   // students + alumni
        ],
        'new_facility' => [
            'label'     => 'New Facility Announcement',
            'variables' => ['name', 'facility_details'],
            'source'    => 'both',
        ],
        'fee_reminder' => [
            'label'     => 'Fee Reminder',
            'variables' => ['name', 'course', 'pending_amount'],
            'source'    => 'students', // current students only
        ],
        'birthday_wishes' => [
            'label'     => 'Birthday Wishes',
            'variables' => ['name'],
            'source'    => 'both',
        ],
    ];

    public function index()
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $db = \Config\Database::connect();

        // Distinct courses from both tables
        $studentCourses = $db->table('admissions')->distinct()->select('course')->orderBy('course')->get()->getResultArray();
        $alumniCourses  = $db->table('alumni')->distinct()->select('course')->where('course IS NOT NULL')->where('course !=', '')->orderBy('course')->get()->getResultArray();

        $allCourses = array_unique(array_merge(
            array_column($studentCourses, 'course'),
            array_column($alumniCourses, 'course')
        ));
        sort($allCourses);

        return view('admin/bulk_message/index', [
            'courses'   => $allCourses,
            'templates' => self::TEMPLATES,
        ]);
    }

    /**
     * AJAX: get recipient count based on source + course filter.
     */
    public function recipientCount()
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $this->response->setJSON(['count' => 0]);

        $source       = $this->request->getPost('source') ?? 'both';
        $course       = $this->request->getPost('course') ?? '';
        $templateName = $this->request->getPost('template') ?? '';

        // fee_reminder only for current students
        if ($templateName === 'fee_reminder') {
            $source = 'students';
        }

        $recipients = $this->fetchRecipients($source, $course, $templateName);
        return $this->response->setJSON(['count' => count($recipients)]);
    }

    /**
     * Process bulk sending — returns JSON progress result.
     */
    public function send()
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $this->response->setJSON(['error' => 'Unauthorized'], 401);

        $source       = $this->request->getPost('source') ?? 'both';
        $course       = $this->request->getPost('course') ?? '';
        $templateName = $this->request->getPost('template') ?? '';
        $variables    = $this->request->getPost('variables') ?? [];  // assoc: ['occasion' => 'Holi']

        if (empty($templateName) || !array_key_exists($templateName, self::TEMPLATES)) {
            return $this->response->setJSON(['error' => 'Invalid template selected.']);
        }

        // fee_reminder forced to students
        if ($templateName === 'fee_reminder') {
            $source = 'students';
        }

        $recipients = $this->fetchRecipients($source, $course, $templateName);

        if (empty($recipients)) {
            return $this->response->setJSON(['error' => 'No recipients found for selected filters.']);
        }

        $templateDef = self::TEMPLATES[$templateName];
        $success     = 0;
        $failed      = 0;
        $failedList  = [];

        foreach ($recipients as $recipient) {
            $name  = $recipient['name'];
            $phone = $recipient['phone'];

            // Build ordered parameter array from template definition
            $params = [];
            foreach ($templateDef['variables'] as $varKey) {
                if ($varKey === 'name') {
                    $params[] = $name;
                } elseif ($varKey === 'course') {
                    $params[] = $recipient['course'] ?? '';
                } elseif ($varKey === 'pending_amount') {
                    $params[] = $recipient['pending_amount'] ?? '0';
                } else {
                    // User-supplied variable
                    $params[] = $variables[$varKey] ?? '';
                }
            }

            $result = $this->sendAndLog($name, $phone, $templateName, $params);

            if ($result['success']) {
                $success++;
            } else {
                $failed++;
                $failedList[] = $name . ' (' . $phone . ')';
            }

            // Rate limit: 1 second delay between messages
            sleep(1);
        }

        return $this->response->setJSON([
            'success'     => true,
            'sent'        => $success,
            'failed'      => $failed,
            'total'       => count($recipients),
            'failed_list' => $failedList,
        ]);
    }

    /**
     * Fetch recipient list based on source + course + template.
     */
    private function fetchRecipients(string $source, string $course, string $templateName): array
    {
        $db         = \Config\Database::connect();
        $recipients = [];

        if (in_array($source, ['students', 'both'])) {
            $builder = $db->table('admissions')
                ->select('id, name, phone, course, course_fee, discount');

            if (!empty($course)) {
                $builder->where('course', $course);
            }

            $students = $builder->get()->getResultArray();

            // For fee_reminder, calculate pending_amount
            if ($templateName === 'fee_reminder' && !empty($students)) {
                $ids = array_column($students, 'id');
                $placeholders = implode(',', array_fill(0, count($ids), '?'));
                $paidRows = $db->query(
                    "SELECT student_id, COALESCE(SUM(amount),0) as paid_amount
                     FROM fees WHERE status='Paid' AND student_id IN ({$placeholders})
                     GROUP BY student_id",
                    $ids
                )->getResultArray();

                $paid = [];
                foreach ($paidRows as $r) {
                    $paid[$r['student_id']] = $r['paid_amount'];
                }

                foreach ($students as &$s) {
                    $total             = max(0, ($s['course_fee'] ?? 0) - ($s['discount'] ?? 0));
                    $s['pending_amount'] = max(0, $total - ($paid[$s['id']] ?? 0));
                }
                unset($s);
            }

            foreach ($students as $s) {
                $s['_source'] = 'student';
                $recipients[] = $s;
            }
        }

        if (in_array($source, ['alumni', 'both'])) {
            $builder = $db->table('alumni')->select('id, name, phone, course');
            if (!empty($course)) {
                $builder->where('course', $course);
            }
            $builder->where('is_active', 1);
            $alumni = $builder->get()->getResultArray();

            foreach ($alumni as $a) {
                $a['_source'] = 'alumni';
                $recipients[] = $a;
            }
        }

        return $recipients;
    }
}

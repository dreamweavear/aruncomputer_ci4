<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Traits\WhatsAppTrait;

class BirthdayReminder extends BaseController
{
    use WhatsAppTrait;

    /**
     * Show today's birthdays from admissions (dob) + alumni (date_of_birth).
     */
    public function index()
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $today  = date('m-d');    // MM-DD  (year-independent birthday match)
        $db     = \Config\Database::connect();

        // Current students — use `dob` column (already exists in admissions)
        $students = $db->query(
            "SELECT id, name, phone, course, dob AS date_of_birth, 'student' AS source
             FROM admissions
             WHERE DATE_FORMAT(dob, '%m-%d') = ?",
            [$today]
        )->getResultArray();

        // Alumni — use `date_of_birth` column
        $alumni = $db->query(
            "SELECT id, name, phone, course, date_of_birth, 'alumni' AS source
             FROM alumni
             WHERE DATE_FORMAT(date_of_birth, '%m-%d') = ?
             AND is_active = 1",
            [$today]
        )->getResultArray();

        $birthdays = array_merge($students, $alumni);

        return view('admin/birthday_reminder/index', [
            'birthdays' => $birthdays,
            'today'     => date('d F Y'),
        ]);
    }

    /**
     * Send birthday_wishes template to all today's birthdays.
     * Returns JSON.
     */
    public function sendTodayBirthdays()
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $this->response->setJSON(['error' => 'Unauthorized'], 401);

        $today  = date('m-d');
        $db     = \Config\Database::connect();

        $students = $db->query(
            "SELECT name, phone FROM admissions WHERE DATE_FORMAT(dob, '%m-%d') = ?",
            [$today]
        )->getResultArray();

        $alumni = $db->query(
            "SELECT name, phone FROM alumni WHERE DATE_FORMAT(date_of_birth, '%m-%d') = ? AND is_active = 1",
            [$today]
        )->getResultArray();

        $all     = array_merge($students, $alumni);
        $success = 0;
        $failed  = 0;

        foreach ($all as $person) {
            $result = $this->sendAndLog(
                $person['name'],
                $person['phone'],
                'birthday_wishes',
                [$person['name']]
            );

            if ($result['success']) {
                $success++;
            } else {
                $failed++;
            }

            sleep(1);
        }

        return $this->response->setJSON([
            'success' => true,
            'sent'    => $success,
            'failed'  => $failed,
            'total'   => count($all),
        ]);
    }
}

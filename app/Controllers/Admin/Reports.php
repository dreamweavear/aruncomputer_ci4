<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Reports extends BaseController
{
    public function feePending()
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) {
            return $authCheck;
        }

        $db = \Config\Database::connect();

        // Fetch all students with fee summary — no hardcoded fees
        $students = $db->query("
            SELECT
                a.id,
                a.name,
                a.phone,
                a.course,
                a.admission_date,
                a.course_fee,
                a.discount,
                (a.course_fee - a.discount) AS total_fee,
                COALESCE(SUM(CASE WHEN f.status = 'Paid' THEN f.amount ELSE 0 END), 0) AS paid_amount,
                ((a.course_fee - a.discount) - COALESCE(SUM(CASE WHEN f.status = 'Paid' THEN f.amount ELSE 0 END), 0)) AS pending_amount
            FROM admissions a
            LEFT JOIN fees f ON f.student_id = a.id
            WHERE a.deleted_at IS NULL
            GROUP BY a.id
            ORDER BY a.course, a.name
        ")->getResultArray();

        // Group by course
        $courseWise  = [];
        $courseTotals = [];

        foreach ($students as $s) {
            $course = $s['course'];
            $courseWise[$course][] = $s;

            if (!isset($courseTotals[$course])) {
                $courseTotals[$course] = [
                    'total_fee'      => 0,
                    'paid_amount'    => 0,
                    'pending_amount' => 0,
                    'student_count'  => 0,
                ];
            }
            $courseTotals[$course]['total_fee']      += $s['total_fee'];
            $courseTotals[$course]['paid_amount']    += $s['paid_amount'];
            $courseTotals[$course]['pending_amount'] += max(0, $s['pending_amount']);
            $courseTotals[$course]['student_count']++;
        }

        // Grand totals
        $grandTotal = [
            'total_fee'      => array_sum(array_column($courseTotals, 'total_fee')),
            'paid_amount'    => array_sum(array_column($courseTotals, 'paid_amount')),
            'pending_amount' => array_sum(array_column($courseTotals, 'pending_amount')),
            'student_count'  => array_sum(array_column($courseTotals, 'student_count')),
        ];

        return view('admin/reports/fee_pending', [
            'courseWise'   => $courseWise,
            'courseTotals' => $courseTotals,
            'grandTotal'   => $grandTotal,
        ]);
    }
}

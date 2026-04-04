<?php
namespace App\Controllers\Admin;
use App\Models\AdmissionModel;
use App\Controllers\BaseController;

class AdminDashboard extends BaseController
{
    public function index()
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) {
            return $authCheck;
        }

        $model = new AdmissionModel();
        $data['students'] = $model->findAll();

        $db = \Config\Database::connect();

        // Card 1: Total Students
        $data['total_students'] = $db->table('admissions')->countAllResults();

        // Card 2: Pending Fees = total charged - total paid
        $totalCharged = (float) $db->query(
            'SELECT COALESCE(SUM(course_fee - COALESCE(discount,0)), 0) AS total FROM admissions'
        )->getRow()->total;
        $totalPaid = (float) $db->query(
            'SELECT COALESCE(SUM(amount), 0) AS total FROM fees'
        )->getRow()->total;
        $data['pending_fees'] = max(0, $totalCharged - $totalPaid);

        // Card 3: Today's Birthdays
        $data['todays_birthdays'] = (int) $db->query(
            "SELECT COUNT(*) AS cnt FROM admissions
             WHERE DATE_FORMAT(dob, '%m-%d') = DATE_FORMAT(NOW(), '%m-%d')"
        )->getRow()->cnt;

        // Card 4: New Enquiries (last 7 days)
        $data['new_enquiries'] = (int) $db->query(
            "SELECT COUNT(*) AS cnt FROM enquiries
             WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)"
        )->getRow()->cnt;

        return view('admin/dashboard', $data);
    }
}

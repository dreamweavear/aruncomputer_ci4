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

        return view('admin/dashboard', $data);
    }
}
<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\EnquiryModel;

class Enquiry extends BaseController
{
    public function index()
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $model = new EnquiryModel();
        $data  = [
            'enquiries' => $model->orderBy('created_at', 'DESC')->findAll(),
        ];

        return view('admin/enquiries/index', $data);
    }

    public function view($id)
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $model   = new EnquiryModel();
        $enquiry = $model->find($id);

        if (!$enquiry) {
            return redirect()->to('/admin/enquiries')->with('error', 'Enquiry not found.');
        }

        return view('admin/enquiries/view', ['enquiry' => $enquiry]);
    }

    public function delete($id)
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $model = new EnquiryModel();
        $model->delete($id);

        return redirect()->to('/admin/enquiries')->with('success', 'Enquiry deleted.');
    }
}

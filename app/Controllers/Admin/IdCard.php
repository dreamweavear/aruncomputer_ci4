<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\AdmissionModel;

class IdCard extends BaseController
{
    /**
     * Print a single student's ID card.
     */
    public function print($id)
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $model   = new AdmissionModel();
        $student = $model->find($id);

        if (!$student) {
            return redirect()->to('admin/admission')->with('error', 'Student not found.');
        }

        $data['cards'] = [$student];

        return view('admin/idcard/print', $data);
    }

    /**
     * Bulk print: one card per selected student, 10 cards per A4 page.
     * Accepts POST field: ids[] (array of admission IDs)
     */
    public function bulk()
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $ids = $this->request->getPost('ids');

        if (empty($ids)) {
            return redirect()->to('admin/admission')->with('error', 'No students selected for printing.');
        }

        $model = new AdmissionModel();
        $cards = [];

        foreach ($ids as $id) {
            $student = $model->find((int) $id);
            if ($student) {
                $cards[] = $student;
            }
        }

        if (empty($cards)) {
            return redirect()->to('admin/admission')->with('error', 'Selected students not found.');
        }

        $data['cards'] = $cards;

        return view('admin/idcard/print', $data);
    }
}

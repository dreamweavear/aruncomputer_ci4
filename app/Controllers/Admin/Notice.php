<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\NoticeModel;  // ✅ Corrected path

class Notice extends BaseController
{
    public function index()
    {
        // Check admin authentication
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) {
            return $authCheck;
        }

        $model = new NoticeModel();
        $data['notices'] = $model->findAll();
        return view('admin/notice/index', $data);
    }

    public function create()
    {
        // Check admin authentication
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) {
            return $authCheck;
        }

        return view('admin/notice/create');
    }

    public function store()
    {
        // Check admin authentication
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) {
            return $authCheck;
        }

        $model = new NoticeModel();
        $data = $this->request->getPost();
        $model->save($data);

        return redirect()->to('/admin/notice')->with('success', 'Notice added successfully.');
    }

    public function delete($id)
    {
        // Check admin authentication
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) {
            return $authCheck;
        }

        $model = new NoticeModel();
        $model->delete($id);
        return redirect()->to('/admin/notice')->with('success', 'Notice deleted.');
    }
}

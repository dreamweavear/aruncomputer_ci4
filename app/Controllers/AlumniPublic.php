<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Admin\AlumniModel;

class AlumniPublic extends BaseController
{
    public function index()
    {
        $model = new AlumniModel();
        $data['alumni'] = $model->where('is_active', 1)->orderBy('admission_date', 'DESC')->findAll();
        $data['title']  = 'Alumni - Arun Computer Institute';
        return view('alumni/index', $data);
    }
}

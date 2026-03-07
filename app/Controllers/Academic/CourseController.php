<?php namespace App\Controllers\Academic;

use App\Models\Academic\CourseModel;
use App\Controllers\BaseController;

class CourseController extends BaseController
{
    public function index()
    {
        // Check admin authentication
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) {
            return $authCheck;
        }

        $model = new CourseModel();
        $data['courses'] = $model->findAll();
        return view('courses/index', $data);
    }
    

 public function create()
{
    // Check admin authentication
    $authCheck = $this->checkAdminAuth();
    if ($authCheck !== true) {
        return $authCheck;
    }

    $courseModel = new \App\Models\Academic\CourseModel();

    $data = [
        'courses' => $courseModel->findAll() // form + list
    ];

    //echo view('templates/headeradmin');
    echo view('courses/create', $data);
    //echo view('templates/footerdash');
}

//------------------
    public function store()
    {
        // Check admin authentication
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) {
            return $authCheck;
        }

        $model = new CourseModel();
        $slug = url_title($this->request->getPost('name'), '-', true);


        $model->save([
            'name' => $this->request->getPost('name'),
            'slug' => $slug,
         ]);
          return redirect()->to('/admin/courses');
       }

    public function edit($id)
    {
        // Check admin authentication
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) {
            return $authCheck;
        }

        $model = new CourseModel();
        $data['course'] = $model->find($id);
        return view('courses/edit', $data);
    }

    public function update($id)
    {
        // Check admin authentication
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) {
            return $authCheck;
        }

        $model = new CourseModel();
        $slug = url_title($this->request->getPost('name'), '-', true);
        $model->update($id, [
            'name' => $this->request->getPost('name'),
            'slug' => $slug,
        ]);
        return redirect()->to('/admin/courses');
    }

    public function delete($id)
    {
        // Check admin authentication
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) {
            return $authCheck;
        }

        $model = new CourseModel();
        $model->delete($id);
        return redirect()->to('/admin/courses');
    }
}

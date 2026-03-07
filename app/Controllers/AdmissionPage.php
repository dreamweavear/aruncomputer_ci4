<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdmissionModel;
use App\Models\Academic\CourseModel;

class AdmissionPage extends BaseController
{
    public function index()
    {
      $courseModel = new CourseModel();
       $data['courses'] = $courseModel->findAll();
        return view('admission/form_public', $data);
    }


    public function store()
    {
        helper(['form', 'url']);

        $rules = [
            'name' => 'required',
            'father_name' => 'required',
            'dob' => 'required',
            'course' => 'required',
            'phone' => 'required',
            'email' => 'required|valid_email',
            'photo' => 'uploaded[photo]|max_size[photo,2048]|is_image[photo]'
        ];

            if (!$this->validate($rules)) {
            $courseModel = new CourseModel();
            return view('admission/form_public', [
                'courses' => $courseModel->findAll(),
                'validation' => $this->validator
            ]);
        }
        

        $photoFile = $this->request->getFile('photo');
        $newName = $photoFile->getRandomName();
        $photoFile->move('uploads/', $newName);

        $model = new \App\Models\AdmissionModel();

        $data = [
            'course' => $this->request->getPost('course'),
            'name' => $this->request->getPost('name'),
            'father_name' => $this->request->getPost('father_name'),
            'dob' => $this->request->getPost('dob'),
            'course' => $this->request->getPost('course'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
             'course_fee' => $this->request->getPost('course_fee'),
            'discount' => $this->request->getPost('discount'),
            'admission_date' => $this->request->getPost('admission_date'),

            'photo' => $newName,
        ];

        $id = $model->insert($data);
        $student = $model->find($id);

              // Normally save logic here
        return redirect()->to('/admissionpage')->with('success', 'Dear Student Your Form submitted Successfully. we will contact you soon')->with('student', $student);
    }
}

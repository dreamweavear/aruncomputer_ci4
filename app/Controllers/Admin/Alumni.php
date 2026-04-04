<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\AlumniModel;

class Alumni extends BaseController
{
    public function index()
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $model  = new AlumniModel();
        $search = $this->request->getGet('search');
        $course = $this->request->getGet('course');

        $builder = $model->builder();

        if (!empty($search)) {
            $builder->groupStart()
                ->like('name', $search)
                ->orLike('phone', $search)
                ->orLike('email', $search)
                ->groupEnd();
        }
        if (!empty($course)) {
            $builder->where('course', $course);
        }

        $builder->orderBy('id', 'DESC');
        $data['alumni']   = $builder->get()->getResultArray();
        $data['search']   = $search;
        $data['course']   = $course;

        // Distinct courses for filter dropdown
        $db = \Config\Database::connect();
        $data['courses'] = $db->table('alumni')
            ->distinct()
            ->select('course')
            ->where('course IS NOT NULL')
            ->where('course !=', '')
            ->orderBy('course')
            ->get()->getResultArray();

        return view('admin/alumni/list', $data);
    }

    public function create()
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $courseModel = new \App\Models\Academic\CourseModel();
        return view('admin/alumni/form', [
            'alumni'   => null,
            'courses'  => $courseModel->findAll(),
            'isEdit'   => false,
        ]);
    }

    public function store()
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $rules = [
            'name'  => 'required|max_length[100]',
            'phone' => 'required|max_length[15]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $model = new AlumniModel();
        $model->insert([
            'name'           => $this->request->getPost('name'),
            'father_name'    => $this->request->getPost('father_name'),
            'course'         => $this->request->getPost('course'),
            'phone'          => $this->request->getPost('phone'),
            'email'          => $this->request->getPost('email'),
            'admission_date' => $this->request->getPost('admission_date') ?: null,
            'date_of_birth'  => $this->request->getPost('date_of_birth') ?: null,
            'address'        => $this->request->getPost('address'),
            'is_active'      => 1,
        ]);

        return redirect()->to('/admin/alumni')->with('success', 'Alumni added successfully.');
    }

    public function edit($id)
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $model  = new AlumniModel();
        $alumni = $model->find($id);
        if (!$alumni) {
            return redirect()->to('/admin/alumni')->with('error', 'Alumni not found.');
        }

        $courseModel = new \App\Models\Academic\CourseModel();
        return view('admin/alumni/form', [
            'alumni'  => $alumni,
            'courses' => $courseModel->findAll(),
            'isEdit'  => true,
        ]);
    }

    public function update($id)
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $rules = [
            'name'  => 'required|max_length[100]',
            'phone' => 'required|max_length[15]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $model = new AlumniModel();
        $model->update($id, [
            'name'           => $this->request->getPost('name'),
            'father_name'    => $this->request->getPost('father_name'),
            'course'         => $this->request->getPost('course'),
            'phone'          => $this->request->getPost('phone'),
            'email'          => $this->request->getPost('email'),
            'admission_date' => $this->request->getPost('admission_date') ?: null,
            'date_of_birth'  => $this->request->getPost('date_of_birth') ?: null,
            'address'        => $this->request->getPost('address'),
            'is_active'      => $this->request->getPost('is_active') ?? 1,
        ]);

        return redirect()->to('/admin/alumni')->with('success', 'Alumni updated successfully.');
    }

    public function delete($id)
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $model = new AlumniModel();
        $model->delete($id);
        return redirect()->to('/admin/alumni')->with('success', 'Alumni deleted.');
    }

    public function import()
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        return view('admin/alumni/import');
    }

    public function importProcess()
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $file = $this->request->getFile('csv_file');

        if (!$file || !$file->isValid()) {
            return redirect()->back()->with('error', 'Please upload a valid CSV file.');
        }

        if ($file->getClientExtension() !== 'csv') {
            return redirect()->back()->with('error', 'Only CSV files are allowed.');
        }

        $file->move(WRITEPATH . 'uploads/csv/', $file->getRandomName());
        $path = WRITEPATH . 'uploads/csv/' . $file->getName();

        $handle = fopen($path, 'r');
        if (!$handle) {
            return redirect()->back()->with('error', 'Could not read CSV file.');
        }

        $model     = new AlumniModel();
        $imported  = 0;
        $skipped   = 0;
        $rowNumber = 0;

        while (($row = fgetcsv($handle)) !== false) {
            $rowNumber++;
            if ($rowNumber === 1) {
                // Skip header row
                continue;
            }

            // CSV columns: name, course, phone, admission_date, date_of_birth
            if (count($row) < 3) {
                $skipped++;
                continue;
            }

            $name          = trim($row[0] ?? '');
            $course        = trim($row[1] ?? '');
            $phone         = trim($row[2] ?? '');
            $admissionDate = trim($row[3] ?? '');
            $dob           = trim($row[4] ?? '');

            if (empty($name) || empty($phone)) {
                $skipped++;
                continue;
            }

            $model->insert([
                'name'           => $name,
                'course'         => $course ?: null,
                'phone'          => $phone,
                'admission_date' => $admissionDate ?: null,
                'date_of_birth'  => $dob ?: null,
                'is_active'      => 1,
            ]);
            $imported++;
        }

        fclose($handle);
        @unlink($path);

        return redirect()->to('/admin/alumni')
            ->with('success', "CSV imported: {$imported} records added, {$skipped} skipped.");
    }
}

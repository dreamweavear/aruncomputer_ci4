<?php namespace App\Controllers\Student;

use App\Controllers\BaseController;
use App\Models\Admin\AdmissionModel;
use App\Models\Academic\CourseModel;
use App\Models\Academic\PaperModel;
use App\Models\Academic\ChapterModel;  
 

class Auth extends BaseController
{
    public function login()

    {
            $data = [
        'courses' => [],
        'papers' => [],
        'units' => [],
        'chapters' => []
    ];
        echo view('templates/headerdash1'); // Sidebar left
       echo view('student/login', $data);
   
       echo view('templates/footerdash');

    }





   public function attempt()
{
    $session = session();
    $admissionModel = new \App\Models\Admin\AdmissionModel();
    $feeModel = new \App\Models\Admin\FeeModel();

    // Step 1: Get login credentials
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    // Step 2: Fetch student by email
    $student = $admissionModel->where('email', $email)->first();

    if ($student && password_verify($password, $student['password'])) {
        // Step 3: Set session
             $session->set([
            'isStudentLoggedIn' => true,
            'studentId'         => $student['id'],
            'studentName'       => $student['name'],
            'studentPhoto'      => $student['photo'] ?? null, // filename e.g. 123.jpg
            'studentPhotoUrl'   => !empty($student['photo'])
                                   ? base_url('uploads/' . $student['photo'])
                                   : null,
        ]);

        // Step 4: Fetch all fee installments
        $studentFees = $feeModel->where('student_id', $student['id'])->findAll();

        // Step 5: Calculate total_paid and pending_fees
        $studentId = $student['id'];
        $paidFees = $feeModel->where('student_id', $studentId)->selectSum('amount')->first();
        $totalPaid = $paidFees['amount'] ?? 0;

        $courseFee = $student['course_fee'];
        $discount = $student['discount'];
        $pending = ($courseFee - $discount) - $totalPaid;

        // Step 6: Load academic models
        $courseModel   = new \App\Models\Academic\CourseModel();
        $paperModel    = new \App\Models\Academic\PaperModel();
        $unitModel     = new \App\Models\Academic\UnitModel();
        $chapterModel  = new \App\Models\Academic\ChapterModel();

        // Step 7: Prepare data for view
        $data = [
            'student'      => $student,
            'courses'      => $courseModel->findAll(),
            'papers'       => $paperModel->findAll(),
            'units'        => $unitModel->findAll(),
            'chapters'     => $chapterModel->findAll(),
            'fees'         => $studentFees,
            'total_paid'   => $totalPaid,
            'pending_fees' => $pending
        ];

        return view('student/dashboard', $data);
    }

    return redirect()->back()->with('error', 'Invalid credentials');
}






    public function logout()
    {
        session()->destroy();
        return redirect()->to('/student/login');
    }
}

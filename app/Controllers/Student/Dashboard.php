<?php namespace App\Controllers\Student;

use App\Controllers\BaseController;
use App\Models\Admin\AdmissionModel;
use App\Models\Admin\FeeModel;
use App\Models\Admin\ExamResultModel;
use App\Models\Admin\CertificateModel;
use App\Models\Academic\CourseModel;
use App\Models\Academic\PaperModel;
use App\Models\Academic\UnitModel;
use App\Models\Academic\ChapterModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();

        if (!$session->get('isStudentLoggedIn')) {
            return redirect()->to(site_url('student/login'));
        }

        $studentId = $session->get('studentId');

        $admissionModel = new AdmissionModel();
        $feeModel       = new FeeModel();

        $student     = $admissionModel->find($studentId);
        $studentFees = $feeModel->where('student_id', $studentId)->findAll();

        $paidFees  = $feeModel->where('student_id', $studentId)->selectSum('amount')->first();
        $totalPaid = $paidFees['amount'] ?? 0;

        $courseFee = $student['course_fee'];
        $discount  = $student['discount'];
        $pending   = ($courseFee - $discount) - $totalPaid;

        // Load academic models
        $courseModel  = new CourseModel();
        $paperModel   = new PaperModel();
        $unitModel    = new UnitModel();
        $chapterModel = new ChapterModel();

        // Exam result and certificate
        $examModel    = new ExamResultModel();
        $certModel    = new CertificateModel();
        $examResult   = $examModel->getLatestByStudent($studentId);
        $certificate  = $certModel->getByStudent($studentId);

        $data = [
            'student'      => $student,
            'fees'         => $studentFees,
            'total_paid'   => $totalPaid,
            'pending_fees' => $pending,
            'courses'      => $courseModel->findAll(),
            'papers'       => $paperModel->findAll(),
            'units'        => $unitModel->findAll(),
            'chapters'     => $chapterModel->findAll(),
            'exam_result'  => $examResult,
            'certificate'  => $certificate,
        ];

        return view('student/dashboard', $data);
    }
}

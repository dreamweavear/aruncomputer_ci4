<?php

namespace App\Controllers\Student;

use App\Controllers\BaseController;
use App\Models\Admin\AdmissionModel;
use App\Models\Admin\ExamResultModel;
use App\Models\Admin\CertificateModel;

class Certificate extends BaseController
{
    /**
     * Student views/downloads their own certificate.
     */
    public function view(int $certId)
    {
        $session = session();

        if (!$session->get('isStudentLoggedIn')) {
            return redirect()->to(site_url('student/login'));
        }

        $studentId   = $session->get('studentId');
        $certModel   = new CertificateModel();
        $certificate = $certModel->find($certId);

        // Ensure this cert belongs to the logged-in student
        if (!$certificate || (int)$certificate['student_id'] !== (int)$studentId) {
            return redirect()->to(site_url('student/dashboard'))->with('error', 'Certificate not found.');
        }

        $admissionModel = new AdmissionModel();
        $examModel      = new ExamResultModel();

        $student = $admissionModel->find($certificate['student_id']);
        $result  = $examModel->getLatestByStudent($certificate['student_id']);

        $durations = ['BASIC' => 3, 'TALLY' => 3, 'CPCT' => 6];
        $course    = strtoupper(trim($student['course']));
        $duration  = 3;
        foreach ($durations as $key => $months) {
            if (str_contains($course, $key)) { $duration = $months; break; }
        }

        $startDate = new \DateTime($student['admission_date']);
        $endDate   = clone $startDate;
        $endDate->modify("+{$duration} months");

        return view('admin/certificate/print', [
            'certificate' => $certificate,
            'student'     => $student,
            'result'      => $result,
            'duration'    => $duration,
            'start_date'  => $startDate->format('d M Y'),
            'end_date'    => $endDate->format('d M Y'),
            'grade_label' => ExamResultModel::gradeLabel($result['grade'] ?? ''),
        ]);
    }
}

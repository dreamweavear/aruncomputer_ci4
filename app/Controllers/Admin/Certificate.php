<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\AdmissionModel;
use App\Models\Admin\ExamResultModel;
use App\Models\Admin\CertificateModel;

class Certificate extends BaseController
{
    /**
     * Print/view certificate.
     */
    public function print(int $certId)
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $certModel      = new CertificateModel();
        $admissionModel = new AdmissionModel();
        $examModel      = new ExamResultModel();

        $certificate = $certModel->find($certId);
        if (!$certificate) {
            return redirect()->to('/admin/exam')->with('error', 'Certificate not found.');
        }

        $student = $admissionModel->find($certificate['student_id']);
        $result  = $examModel->getLatestByStudent($certificate['student_id']);

        // Course duration map
        $durations = [
            'BASIC COMPUTER' => 3,
            'TALLY'          => 3,
            'CPCT'           => 6,
        ];

        $course   = strtoupper(trim($student['course']));
        $duration = 3; // default
        foreach ($durations as $key => $months) {
            if (str_contains($course, strtoupper($key))) {
                $duration = $months;
                break;
            }
        }

        // Calculate end date from admission_date + duration months
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

    /**
     * Reprint duplicate certificate (student-initiated download link).
     * Marks existing certificate as duplicate and increments count.
     */
    public function reprint(int $certId)
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $certModel   = new CertificateModel();
        $certificate = $certModel->find($certId);
        if (!$certificate) {
            return redirect()->to('/admin/exam')->with('error', 'Certificate not found.');
        }

        $certModel->update($certId, [
            'is_duplicate'    => 1,
            'duplicate_count' => $certificate['duplicate_count'] + 1,
        ]);

        return redirect()->to('/admin/certificate/print/' . $certId);
    }
}

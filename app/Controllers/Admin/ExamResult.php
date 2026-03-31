<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\AdmissionModel;
use App\Models\Admin\ExamResultModel;
use App\Models\Admin\CertificateModel;

class ExamResult extends BaseController
{
    /**
     * List all students with their exam status.
     */
    public function index()
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $db             = \Config\Database::connect();
        $admissionModel = new AdmissionModel();

        // All students with latest exam result (left join)
        $students = $db->query("
            SELECT a.id, a.name, a.father_name, a.course, a.admission_date, a.phone,
                   er.id AS result_id, er.theory_marks, er.practical_marks,
                   er.total_marks, er.percentage, er.grade,
                   er.attempt, er.exam_date,
                   c.id AS cert_id, c.certificate_no
            FROM admissions a
            LEFT JOIN exam_results er ON er.student_id = a.id
                AND er.attempt = (
                    SELECT MAX(er2.attempt) FROM exam_results er2
                    WHERE er2.student_id = a.id
                )
            LEFT JOIN certificates c ON c.student_id = a.id
            ORDER BY a.admission_date DESC
        ")->getResultArray();

        return view('admin/exam/index', ['students' => $students]);
    }

    /**
     * Form to enter marks for a student.
     */
    public function create(int $studentId)
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $admissionModel = new AdmissionModel();
        $examModel      = new ExamResultModel();

        $student = $admissionModel->find($studentId);
        if (!$student) {
            return redirect()->to('/admin/exam')->with('error', 'Student not found.');
        }

        $attempts = $examModel->countAttempts($studentId);
        if ($attempts >= 2) {
            return redirect()->to('/admin/exam')->with('error', 'Maximum 2 attempts allowed. Cannot add more results.');
        }

        $nextAttempt = $attempts + 1;

        return view('admin/exam/create', [
            'student'     => $student,
            'nextAttempt' => $nextAttempt,
        ]);
    }

    /**
     * Save marks.
     */
    public function store()
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $studentId     = (int) $this->request->getPost('student_id');
        $theoryMarks   = (int) $this->request->getPost('theory_marks');
        $practicalMarks= (int) $this->request->getPost('practical_marks');
        $examDate      = $this->request->getPost('exam_date');

        // Validation
        if ($theoryMarks < 0 || $theoryMarks > 50 || $practicalMarks < 0 || $practicalMarks > 50) {
            return redirect()->back()->withInput()->with('error', 'Marks must be between 0 and 50.');
        }

        $examModel = new ExamResultModel();
        $attempts  = $examModel->countAttempts($studentId);

        if ($attempts >= 2) {
            return redirect()->to('/admin/exam')->with('error', 'Maximum 2 attempts allowed.');
        }

        $total      = $theoryMarks + $practicalMarks;
        $percentage = round(($total / 100) * 100, 2); // total is out of 100
        $grade      = ExamResultModel::calcGrade($percentage);

        $examModel->insert([
            'student_id'      => $studentId,
            'theory_marks'    => $theoryMarks,
            'practical_marks' => $practicalMarks,
            'total_marks'     => $total,
            'percentage'      => $percentage,
            'grade'           => $grade,
            'attempt'         => $attempts + 1,
            'exam_date'       => $examDate,
            'entered_by'      => session()->get('admin_id') ?? 1,
        ]);

        return redirect()->to('/admin/exam')->with('success', "Marks saved. Grade: {$grade} ({$percentage}%)");
    }

    /**
     * Edit existing result.
     */
    public function edit(int $id)
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $examModel      = new ExamResultModel();
        $admissionModel = new AdmissionModel();

        $result  = $examModel->find($id);
        if (!$result) {
            return redirect()->to('/admin/exam')->with('error', 'Result not found.');
        }

        $student = $admissionModel->find($result['student_id']);

        return view('admin/exam/edit', [
            'result'  => $result,
            'student' => $student,
        ]);
    }

    /**
     * Update existing result.
     */
    public function update(int $id)
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $theoryMarks    = (int) $this->request->getPost('theory_marks');
        $practicalMarks = (int) $this->request->getPost('practical_marks');
        $examDate       = $this->request->getPost('exam_date');

        if ($theoryMarks < 0 || $theoryMarks > 50 || $practicalMarks < 0 || $practicalMarks > 50) {
            return redirect()->back()->withInput()->with('error', 'Marks must be between 0 and 50.');
        }

        $total      = $theoryMarks + $practicalMarks;
        $percentage = round(($total / 100) * 100, 2);
        $grade      = ExamResultModel::calcGrade($percentage);

        $examModel = new ExamResultModel();
        $examModel->update($id, [
            'theory_marks'    => $theoryMarks,
            'practical_marks' => $practicalMarks,
            'total_marks'     => $total,
            'percentage'      => $percentage,
            'grade'           => $grade,
            'exam_date'       => $examDate,
        ]);

        return redirect()->to('/admin/exam')->with('success', "Result updated. Grade: {$grade} ({$percentage}%)");
    }

    /**
     * Generate certificate and redirect to print.
     */
    public function generateCertificate(int $studentId)
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $admissionModel = new AdmissionModel();
        $examModel      = new ExamResultModel();
        $certModel      = new CertificateModel();

        $student = $admissionModel->find($studentId);
        if (!$student) {
            return redirect()->to('/admin/exam')->with('error', 'Student not found.');
        }

        // Only BASIC, TALLY, CPCT get institute certificates
        if (!CertificateModel::isEligible($student['course'])) {
            return redirect()->to('/admin/exam')->with('error', 'This course is not eligible for institute certificate. PGDCA/DCA certificates are issued by Makhanlal University.');
        }

        // Must have passed (grade != F)
        $result = $examModel->getLatestByStudent($studentId);
        if (!$result || $result['grade'] === 'F') {
            return redirect()->to('/admin/exam')->with('error', 'Student has not passed the exam. Certificate cannot be generated.');
        }

        // Check if certificate already exists
        $existing = $certModel->getByStudent($studentId);
        if ($existing) {
            // Issue duplicate
            $certModel->update($existing['id'], [
                'is_duplicate'    => 1,
                'duplicate_count' => $existing['duplicate_count'] + 1,
            ]);
            return redirect()->to('/admin/certificate/print/' . $existing['id']);
        }

        // Generate new certificate
        $courseCode = CertificateModel::courseCode($student['course']);
        $certNo     = $certModel->generateCertNo($courseCode);

        $certModel->insert([
            'student_id'     => $studentId,
            'certificate_no' => $certNo,
            'issue_date'     => date('Y-m-d'),
            'is_duplicate'   => 0,
            'duplicate_count'=> 0,
        ]);

        $certId = $certModel->getInsertID();

        return redirect()->to('/admin/certificate/print/' . $certId);
    }
}

<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ExamResultModel extends Model
{
    protected $table         = 'exam_results';
    protected $primaryKey    = 'id';
    protected $allowedFields = [
        'student_id', 'theory_marks', 'practical_marks',
        'total_marks', 'percentage', 'grade',
        'attempt', 'exam_date', 'entered_by',
    ];
    protected $useTimestamps  = true;
    protected $createdField   = 'created_at';
    protected $updatedField   = 'updated_at';

    /**
     * Calculate grade from percentage.
     */
    public static function calcGrade(float $pct): string
    {
        if ($pct >= 75) return 'A+';
        if ($pct >= 65) return 'A';
        if ($pct >= 55) return 'B';
        if ($pct >= 45) return 'C';
        if ($pct >= 35) return 'D';
        return 'F';
    }

    /**
     * Grade label for display.
     */
    public static function gradeLabel(string $grade): string
    {
        $labels = [
            'A+' => 'Excellent',
            'A'  => 'Very Good',
            'B'  => 'Good',
            'C'  => 'Fair',
            'D'  => 'Satisfactory',
            'F'  => 'Fail',
        ];
        return $labels[$grade] ?? '';
    }

    /**
     * Get latest attempt result for a student.
     */
    public function getLatestByStudent(int $studentId): ?array
    {
        return $this->where('student_id', $studentId)
                    ->orderBy('attempt', 'DESC')
                    ->first();
    }

    /**
     * Count attempts for a student.
     */
    public function countAttempts(int $studentId): int
    {
        return $this->where('student_id', $studentId)->countAllResults();
    }
}

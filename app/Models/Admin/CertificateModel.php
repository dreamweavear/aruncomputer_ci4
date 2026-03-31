<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class CertificateModel extends Model
{
    protected $table         = 'certificates';
    protected $primaryKey    = 'id';
    protected $allowedFields = [
        'student_id', 'certificate_no', 'issue_date',
        'is_duplicate', 'duplicate_count',
    ];
    protected $useTimestamps  = true;
    protected $createdField   = 'created_at';
    protected $updatedField   = ''; // no updated_at column in certificates table

    /**
     * Generate next certificate number.
     * Format: ACI/BASIC/2026/0001
     */
    public function generateCertNo(string $courseCode): string
    {
        $year  = date('Y');
        $db    = \Config\Database::connect();
        $count = $db->table('certificates')
                    ->like('certificate_no', "ACI/{$courseCode}/{$year}/", 'after')
                    ->countAllResults();
        $seq = str_pad($count + 1, 4, '0', STR_PAD_LEFT);
        return "ACI/{$courseCode}/{$year}/{$seq}";
    }

    /**
     * Get course code abbreviation from course name.
     */
    public static function courseCode(string $course): string
    {
        $course = strtoupper(trim($course));
        if (str_contains($course, 'BASIC'))    return 'BASIC';
        if (str_contains($course, 'TALLY'))    return 'TALLY';
        if (str_contains($course, 'CPCT'))     return 'CPCT';
        return 'CERT';
    }

    /**
     * Courses eligible for institute certificate.
     */
    public static function isEligible(string $course): bool
    {
        $course = strtoupper(trim($course));
        return str_contains($course, 'BASIC')
            || str_contains($course, 'TALLY')
            || str_contains($course, 'CPCT');
    }

    public function getByStudent(int $studentId): ?array
    {
        return $this->where('student_id', $studentId)
                    ->orderBy('id', 'DESC')
                    ->first();
    }
}

<?php
namespace App\Models;
use CodeIgniter\Model;

class AdmissionModel extends Model
{
    protected $table = 'admissions';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'course', 'name', 'father_name', 'dob', 'course', 'phone', 'email',
        'photo', 'course_fee', 'discount', 'admission_date',
         'admission_amount',  // ✅ ये भी add करें
        'receipt_number',    // ✅ ये भी add करें
        
        // ✅ YEH LINE ADD KAREN - Password field
        'password'
    ];

    // ЁЯФТ Soft delete enable рдХрд░реЗрдВ
    protected $useSoftDeletes = true;

    // ЁЯХТ Timestamps enable рдХрд░реЗрдВ рдЕрдЧрд░ рдЖрдкрдиреЗ created_at / updated_at columns рднреА рд░рдЦреЗ рд╣реИрдВ
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';  // рдпрд╣реА important рд╣реИ soft delete рдХреЗ рд▓рд┐рдП
}

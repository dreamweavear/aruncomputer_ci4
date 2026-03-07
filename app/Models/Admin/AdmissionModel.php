<?php
namespace App\Models\Admin;

use CodeIgniter\Model;

class AdmissionModel extends Model
{
    protected $table = 'admissions';
    protected $primaryKey = 'id';
    
    // ✅ COMPLETE allowedFields list
    protected $allowedFields = [
        // Admission form fields
        'admission_date',
       // 'admission_amount',
       // 'receipt_number',
        'course',
        'name',
        'father_name',
        'dob',
        'phone',
        'email',
        'course_fee',
        'discount',
        //'admission_fee', // ✅ Added this
        'photo',
        'password',
        
        // ✅ WhatsApp/Email tracking fields
        'whatsapp_sent',
        'email_sent',
        'student_id_display'
    ];
    
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    
    protected $validationRules = [
        'name' => 'required',
        'phone' => 'required',
        'email' => 'required|valid_email',
        'course' => 'required'
    ];
}
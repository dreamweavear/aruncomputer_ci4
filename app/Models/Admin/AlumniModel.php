<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class AlumniModel extends Model
{
    protected $table          = 'alumni';
    protected $primaryKey     = 'id';
    protected $allowedFields  = [
        'name', 'father_name', 'course', 'phone', 'email',
        'admission_date', 'date_of_birth', 'address', 'is_active',
    ];
    protected $useTimestamps  = true;
    protected $createdField   = 'created_at';
    protected $updatedField   = 'updated_at';

    protected $validationRules = [
        'name'  => 'required|max_length[100]',
        'phone' => 'required|max_length[15]',
    ];
}

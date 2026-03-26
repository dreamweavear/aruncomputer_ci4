<?php

namespace App\Models;

use CodeIgniter\Model;

class EnquiryModel extends Model
{
    protected $table      = 'enquiries';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name',
        'father_name',
        'dob',
        'phone',
        'email',
        'course',
        'message',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
}

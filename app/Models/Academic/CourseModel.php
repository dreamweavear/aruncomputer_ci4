<?php namespace App\Models\Academic;

use CodeIgniter\Model;

class CourseModel extends Model
{
    protected $table = 'courses';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'slug', 'fee', 'duration_months', 'fee_type', 'is_active'];
}


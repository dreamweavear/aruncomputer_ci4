<?php

namespace App\Models;

use CodeIgniter\Model;

class ChapterModel extends Model
{
    protected $table = 'chapters';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'slug', 'content', 'unit_id', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
}


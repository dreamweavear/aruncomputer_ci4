<?php namespace App\Models\Admin;

use CodeIgniter\Model;

class NoticeModel extends Model
{
    protected $table = 'notices';
    protected $primaryKey = 'id';
    protected $allowedFields = ['message', 'url', 'status'];
    protected $useTimestamps = true;
}

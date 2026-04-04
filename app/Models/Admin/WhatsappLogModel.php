<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class WhatsappLogModel extends Model
{
    protected $table         = 'whatsapp_logs';
    protected $primaryKey    = 'id';
    protected $allowedFields = [
        'recipient_name', 'phone', 'template_name',
        'variables_sent', 'status', 'error_message', 'sent_at',
    ];
    protected $useTimestamps = false;
}

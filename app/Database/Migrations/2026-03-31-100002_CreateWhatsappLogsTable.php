<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateWhatsappLogsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'             => ['type' => 'INT', 'constraint' => 11, 'auto_increment' => true],
            'recipient_name' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'phone'          => ['type' => 'VARCHAR', 'constraint' => 20],
            'template_name'  => ['type' => 'VARCHAR', 'constraint' => 100],
            'variables_sent' => ['type' => 'TEXT', 'null' => true],
            'status'         => ['type' => 'ENUM', 'constraint' => ['sent', 'failed'], 'default' => 'sent'],
            'error_message'  => ['type' => 'TEXT', 'null' => true],
            'sent_at'        => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('phone');
        $this->forge->addKey('sent_at');
        $this->forge->createTable('whatsapp_logs');

        // Add date_of_birth to admissions if not exists
        $db = \Config\Database::connect();
        $fields = $db->getFieldNames('admissions');
        if (!in_array('date_of_birth', $fields)) {
            $this->forge->addColumn('admissions', [
                'date_of_birth' => [
                    'type'    => 'DATE',
                    'null'    => true,
                    'default' => null,
                    'after'   => 'dob',
                ],
            ]);
        }
    }

    public function down()
    {
        $this->forge->dropTable('whatsapp_logs');
    }
}

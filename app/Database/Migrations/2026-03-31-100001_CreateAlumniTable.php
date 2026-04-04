<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAlumniTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'             => ['type' => 'INT', 'constraint' => 11, 'auto_increment' => true],
            'name'           => ['type' => 'VARCHAR', 'constraint' => 100],
            'father_name'    => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'course'         => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'phone'          => ['type' => 'VARCHAR', 'constraint' => 15],
            'email'          => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'admission_date' => ['type' => 'DATE', 'null' => true],
            'date_of_birth'  => ['type' => 'DATE', 'null' => true],
            'address'        => ['type' => 'TEXT', 'null' => true],
            'is_active'      => ['type' => 'TINYINT', 'constraint' => 1, 'default' => 1],
            'created_at'     => ['type' => 'DATETIME', 'null' => true],
            'updated_at'     => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('phone');
        $this->forge->createTable('alumni');
    }

    public function down()
    {
        $this->forge->dropTable('alumni');
    }
}

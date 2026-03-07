<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGalleryTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'INT', 'constraint' => 9, 'unsigned' => true, 'auto_increment' => true],
            'year'          => ['type' => 'VARCHAR', 'constraint' => 20],
            'batch_type'    => ['type' => 'VARCHAR', 'constraint' => 50],
            'image'         => ['type' => 'VARCHAR', 'constraint' => 255],
            'students_count'=> ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
            'created_at'    => ['type' => 'DATETIME', 'null' => true],
            'updated_at'    => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('gallery');
    }

    public function down()
    {
        $this->forge->dropTable('gallery');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateExamAndCertificateTables extends Migration
{
    public function up()
    {
        // exam_results table
        $this->forge->addField([
            'id'               => ['type' => 'INT', 'constraint' => 11, 'auto_increment' => true],
            'student_id'       => ['type' => 'INT', 'constraint' => 11],
            'theory_marks'     => ['type' => 'INT', 'constraint' => 3, 'default' => 0],
            'practical_marks'  => ['type' => 'INT', 'constraint' => 3, 'default' => 0],
            'total_marks'      => ['type' => 'INT', 'constraint' => 3, 'default' => 0],
            'percentage'       => ['type' => 'DECIMAL', 'constraint' => '5,2', 'default' => 0],
            'grade'            => ['type' => 'VARCHAR', 'constraint' => 5, 'null' => true],
            'attempt'          => ['type' => 'TINYINT', 'constraint' => 1, 'default' => 1],
            'exam_date'        => ['type' => 'DATE', 'null' => true],
            'entered_by'       => ['type' => 'INT', 'constraint' => 11, 'null' => true],
            'created_at'       => ['type' => 'DATETIME', 'null' => true],
            'updated_at'       => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('student_id');
        $this->forge->addForeignKey('student_id', 'admissions', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('exam_results');

        // certificates table
        $this->forge->addField([
            'id'               => ['type' => 'INT', 'constraint' => 11, 'auto_increment' => true],
            'student_id'       => ['type' => 'INT', 'constraint' => 11],
            'certificate_no'   => ['type' => 'VARCHAR', 'constraint' => 50],
            'issue_date'       => ['type' => 'DATE', 'null' => true],
            'is_duplicate'     => ['type' => 'TINYINT', 'constraint' => 1, 'default' => 0],
            'duplicate_count'  => ['type' => 'INT', 'constraint' => 11, 'default' => 0],
            'created_at'       => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('certificate_no');
        $this->forge->addKey('student_id');
        $this->forge->addForeignKey('student_id', 'admissions', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('certificates');
    }

    public function down()
    {
        $this->forge->dropTable('certificates');
        $this->forge->dropTable('exam_results');
    }
}

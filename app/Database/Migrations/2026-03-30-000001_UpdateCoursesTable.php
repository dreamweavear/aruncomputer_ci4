<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateCoursesTable extends Migration
{
    public function up()
    {
        // Add new columns IF NOT already present
        $fields = $this->db->query("DESCRIBE courses")->getResultArray();
        $existingCols = array_column($fields, 'Field');

        if (!in_array('fee', $existingCols)) {
            $this->db->query("ALTER TABLE courses ADD COLUMN fee DECIMAL(10,2) DEFAULT NULL");
        }
        if (!in_array('duration_months', $existingCols)) {
            $this->db->query("ALTER TABLE courses ADD COLUMN duration_months INT DEFAULT NULL");
        }
        if (!in_array('fee_type', $existingCols)) {
            $this->db->query("ALTER TABLE courses ADD COLUMN fee_type ENUM('fixed','per_month') DEFAULT 'fixed'");
        }
        if (!in_array('is_active', $existingCols)) {
            $this->db->query("ALTER TABLE courses ADD COLUMN is_active TINYINT DEFAULT 1");
        }

        // Insert new courses IF NOT already present
        $courses = [
            ['name' => 'BASIC COMPUTER', 'slug' => 'basic-computer', 'fee_type' => 'fixed'],
            ['name' => 'TALLY',           'slug' => 'tally',          'fee_type' => 'fixed'],
            ['name' => 'CPCT',            'slug' => 'cpct',           'fee_type' => 'per_month'],
        ];

        foreach ($courses as $c) {
            $exists = $this->db->query(
                "SELECT id FROM courses WHERE name = ?", [$c['name']]
            )->getRow();

            if (!$exists) {
                $this->db->query(
                    "INSERT INTO courses (name, slug, fee_type, is_active) VALUES (?, ?, ?, 1)",
                    [$c['name'], $c['slug'], $c['fee_type']]
                );
            }
        }
    }

    public function down()
    {
        // Remove the added columns (safe rollback)
        $fields = $this->db->query("DESCRIBE courses")->getResultArray();
        $existingCols = array_column($fields, 'Field');

        foreach (['fee', 'duration_months', 'fee_type', 'is_active'] as $col) {
            if (in_array($col, $existingCols)) {
                $this->db->query("ALTER TABLE courses DROP COLUMN {$col}");
            }
        }
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPaymentModeAndStatusToFees extends Migration
{
    public function up()
    {
        $this->forge->addColumn('fees', [
            'payment_mode'  => [
                'type'       => 'ENUM',
                'constraint' => ['Cash', 'Cheque', 'Bank Transfer', 'Online', 'DD'],
                'default'    => 'Cash',
                'null'       => false,
            ],
            'status'        => [
                'type'       => 'ENUM',
                'constraint' => ['Paid', 'Pending', 'Overdue', 'Partial'],
                'default'    => 'Paid',
                'null'       => false,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('fees', ['payment_mode', 'status']);
    }
}

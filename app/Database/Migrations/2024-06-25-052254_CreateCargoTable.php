<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCargoTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'ad' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'durum' => [
                'type' => 'integer',
                'constraint' => '11',
                'default' => '1',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('Cargo');
    }

    public function down()
    {
        $this->forge->dropTable('Cargo');
    }
}

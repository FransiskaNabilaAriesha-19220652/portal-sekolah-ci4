<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRuangan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ID_Ruangan'  => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'Nama_Ruangan'=> ['type' => 'VARCHAR', 'constraint' => 255],
            'Kapasitas'   => ['type' => 'INT', 'constraint' => 5],
        ]);

        $this->forge->addPrimaryKey('ID_Ruangan');
        $this->forge->createTable('Ruangan');
    }

    public function down()
    {
        $this->forge->dropTable('Ruangan');
    }
}

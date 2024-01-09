<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMataPelajaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Kode_Mata_Pelajaran' => ['type' => 'VARCHAR', 'constraint' => 50],
            'Nama_Mata_Pelajaran' => ['type' => 'VARCHAR', 'constraint' => 255],
        ]);

        $this->forge->addPrimaryKey('Kode_Mata_Pelajaran');
        $this->forge->createTable('Mata_Pelajaran');
    }

    public function down()
    {
        $this->forge->dropTable('Mata_Pelajaran');
    }
}

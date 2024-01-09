<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKelas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Nama_Kelas' => ['type' => 'VARCHAR', 'constraint' => 50],
            'Wali_Kelas' => ['type' => 'VARCHAR', 'constraint' => 18],
        ]);

        $this->forge->addPrimaryKey('Nama_Kelas');
        $this->forge->addForeignKey('Wali_Kelas', 'Guru', 'NIP');
        $this->forge->createTable('Kelas');
    }

    public function down()
    {
        $this->forge->dropTable('Kelas');
    }
}

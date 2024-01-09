<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNilaiSiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ID_Nilai'         => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'NIS_Siswa'        => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'Kode_Mata_Pelajaran' => ['type' => 'VARCHAR', 'constraint' => 50],
            'Nilai'            => ['type' => 'DECIMAL', 'constraint' => '5,2'],
        ]);

        $this->forge->addPrimaryKey('ID_Nilai');
        $this->forge->addForeignKey('NIS_Siswa', 'Siswa', 'NIS');
        $this->forge->addForeignKey('Kode_Mata_Pelajaran', 'Mata_Pelajaran', 'Kode_Mata_Pelajaran');
        $this->forge->createTable('Nilai_Siswa');
    }

    public function down()
    {
        $this->forge->dropTable('Nilai_Siswa');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateJadwal extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ID_Jadwal'        => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'Hari'             => ['type' => 'VARCHAR', 'constraint' => 50],
            'Jam'              => ['type' => 'TIME'],
            'Kelas'            => ['type' => 'VARCHAR', 'constraint' => 50],
            'Kode_Mata_Pelajaran' => ['type' => 'VARCHAR', 'constraint' => 50],
            'NIP_Guru'         => ['type' => 'VARCHAR', 'constraint' => 18],
        ]);

        $this->forge->addPrimaryKey('ID_Jadwal');
        $this->forge->addForeignKey('Kode_Mata_Pelajaran', 'Mata_Pelajaran', 'Kode_Mata_Pelajaran');
        $this->forge->addForeignKey('NIP_Guru', 'Guru', 'NIP');
        $this->forge->createTable('Jadwal');
    }

    public function down()
    {
        $this->forge->dropTable('Jadwal');
    }
}

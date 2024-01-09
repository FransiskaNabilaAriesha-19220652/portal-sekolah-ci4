<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAbsensi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ID_Absensi' => ['type' => 'INT', 'constraint' => 10, 'unsigned' => true, 'auto_increment' => true],
            'NIS_Siswa'  => ['type' => 'INT', 'constraint' => 10, 'unsigned' => true],
            'Tanggal'    => ['type' => 'DATE'],
            'Kehadiran'  => ['type' => 'ENUM("Hadir", "Sakit","Alpa")', 'default' => 'Hadir'],
        ]);

        $this->forge->addPrimaryKey('ID_Absensi');
        $this->forge->addForeignKey('NIS_Siswa', 'Siswa', 'NIS');
        $this->forge->createTable('Absensi');
    }

    public function down()
    {
        $this->forge->dropTable('Absensi');
    }
}

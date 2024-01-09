<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEventSekolah extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ID_Event'           => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'Nama_Kegiatan'      => ['type' => 'VARCHAR', 'constraint' => 255],
            'Tanggal'            => ['type' => 'DATE'],
            'Deskripsi'          => ['type' => 'TEXT'],
            'ID_Ruangan'         => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'NIP_Guru_Penanggung_Jawab' => ['type' => 'VARCHAR', 'constraint' => 18],
        ]);

        $this->forge->addPrimaryKey('ID_Event');
        $this->forge->addForeignKey('ID_Ruangan', 'Ruangan', 'ID_Ruangan');
        $this->forge->addForeignKey('NIP_Guru_Penanggung_Jawab', 'Guru', 'NIP');
        $this->forge->createTable('Event_Sekolah');
    }

    public function down()
    {
        $this->forge->dropTable('Event_Sekolah');
    }
}

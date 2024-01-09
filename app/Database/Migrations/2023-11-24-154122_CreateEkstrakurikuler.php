<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEkstrakurikuler extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ID_Ekstrakurikuler'   => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'Nama_Ekstrakurikuler' => ['type' => 'VARCHAR', 'constraint' => 255],
            'Deskripsi'            => ['type' => 'TEXT'],
            'NIP_Guru_Pembimbing'  => ['type' => 'VARCHAR', 'constraint' => 18],
        ]);

        $this->forge->addPrimaryKey('ID_Ekstrakurikuler');
        $this->forge->addForeignKey('NIP_Guru_Pembimbing', 'Guru', 'NIP');
        $this->forge->createTable('Ekstrakurikuler');
    }

    public function down()
    {
        $this->forge->dropTable('Ekstrakurikuler');
    }
}

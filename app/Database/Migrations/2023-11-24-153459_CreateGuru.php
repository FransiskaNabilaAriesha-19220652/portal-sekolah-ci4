<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGuru extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'NIP'           => ['type' => 'VARCHAR', 'constraint' => 18],
            'Nama_Guru'     => ['type' => 'VARCHAR', 'constraint' => 255],
            'Mata_Pelajaran'=> ['type' => 'VARCHAR', 'constraint' => 255],
            'Alamat'        => ['type' => 'TEXT'],
            'Tanggal_Lahir' => ['type' => 'DATE'],
            'Agama'         => ['type' => 'VARCHAR', 'constraint' => 50],
            'user_id'        => ['type' => 'INT', 'constraint' => 20, 'unsigned' => true]

        ]);

        $this->forge->addPrimaryKey('NIP');
        $this->forge->addForeignKey('user_id', 'Users', 'id');
        $this->forge->createTable('Guru');
    }

    public function down()
    {
        $this->forge->dropTable('Guru');
    }
}

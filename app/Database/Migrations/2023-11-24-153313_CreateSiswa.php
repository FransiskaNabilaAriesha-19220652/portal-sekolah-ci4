<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSiswa extends Migration
{
    public function up()
    {
        //tambahkan sesuai kebutuhan 
        $this->forge->addField([
            'NIS'          => ['type' => 'INT', 'constraint' => 10,'unsigned' => true],
            'Nama_Siswa'   => ['type' => 'VARCHAR', 'constraint' => 255],
            'Kelas'        => ['type' => 'VARCHAR', 'constraint' => 50],
            'Alamat'       => ['type' => 'TEXT'],
            'Tanggal_Lahir' => ['type' => 'DATE'],
            'Agama'        => ['type' => 'VARCHAR', 'constraint' => 50],
            'user_id'       => ['type' => 'INT', 'constraint' => 20, 'unsigned' => true]
        ]);

        $this->forge->addPrimaryKey('NIS');
        $this->forge->addForeignKey('user_id', 'Users', 'id');
        $this->forge->createTable('Siswa');
    }

    public function down()
    {
        $this->forge->dropTable('Siswa');
    }
}

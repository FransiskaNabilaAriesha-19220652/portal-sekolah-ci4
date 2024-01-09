<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrangTua extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ID_Orang_Tua' => ['type' => 'VARCHAR', 'constraint' => 16],
            'Nama_Orang_Tua' => ['type' => 'VARCHAR', 'constraint' => 255],
            'Alamat'        => ['type' => 'TEXT'],
            'Nomor_Telepon' => ['type' => 'VARCHAR', 'constraint' => 20],
            'Email'         => ['type' => 'VARCHAR', 'constraint' => 255],
            'NIS_Siswa'     => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'Agama'         => ['type' => 'VARCHAR', 'constraint' => 50],
            'user_id'        => ['type' => 'INT', 'constraint' => 20, 'unsigned' => true]

        ]);

        $this->forge->addPrimaryKey('ID_Orang_Tua');
        $this->forge->addForeignKey('NIS_Siswa', 'Siswa', 'NIS');
        $this->forge->addForeignKey('user_id', 'Users', 'id');
        $this->forge->createTable('Orang_Tua');
    }

    public function down()
    {
        $this->forge->dropTable('Orang_Tua');
    }
}

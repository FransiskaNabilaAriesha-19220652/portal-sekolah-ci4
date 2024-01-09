<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLevelAkses extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Id_Level' => ['type' => 'INT', 'constraint' => 1, 'unsigned' => true, 'auto_increment' => true],
            'Nama_Level' => ['type' => 'VARCHAR', 'constraint' => 50],
        ]);

        $this->forge->addPrimaryKey('Id_Level');
        $this->forge->createTable('Level_Akses');
    }
    public function down()
    {
        $this->forge->dropTable('Level_Akses');
    }
}

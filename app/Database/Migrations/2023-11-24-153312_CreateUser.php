<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'  => ['type' => 'INT', 'constraint' => 20,'unsigned' => true, 'auto_increment' => true],
            'NIS_NIP_ID'  => ['type' => 'VARCHAR', 'constraint' => 20],
            'Password' => ['type' => 'VARCHAR', 'constraint' => 255],
            'Level'    => ['type' => 'INT', 'constraint' => 1, 'unsigned' => true]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('Level', 'Level_Akses', 'Id_Level');
        $this->forge->createTable('Users');
    }

    public function down()
    {
        $this->forge->dropTable('Users');
    }
}

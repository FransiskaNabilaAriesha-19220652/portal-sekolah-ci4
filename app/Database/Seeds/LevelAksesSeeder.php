<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LevelAksesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['Nama_Level' => 'Siswa'],
            ['Nama_Level' => 'Guru'],
            ['Nama_Level' => 'Admin'],
        ];

        // query
        $this->db->table('Level_Akses')->insertBatch($data);
    }
}

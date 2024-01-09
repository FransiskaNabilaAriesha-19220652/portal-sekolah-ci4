<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RuanganSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'Nama_Ruangan' => 'Aula',
                'Kapasitas'    => 100,
            ],
            [
                'Nama_Ruangan' => 'Laboratorium Kimia',
                'Kapasitas'    => 30,
            ],
            // Tambahkan data lain jika diperlukan
        ];

        // Insert data ke tabel
        $this->db->table('Ruangan')->insertBatch($data);
    }
}

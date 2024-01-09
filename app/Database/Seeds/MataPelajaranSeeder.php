<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MataPelajaranSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'Kode_Mata_Pelajaran'   => 'MP001',
                'Nama_Mata_Pelajaran'   => 'Matematika',
            ],
            [
                'Kode_Mata_Pelajaran'   => 'MP002',
                'Nama_Mata_Pelajaran'   => 'Bahasa Inggris',
            ],
        ];

        // Insert data ke tabel
        $this->db->table('Mata_Pelajaran')->insertBatch($data);
    }
}

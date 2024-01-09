<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NilaiSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'NIS_Siswa'           => 1111111111,
                'Kode_Mata_Pelajaran' => 'MP001',
                'Nilai'               => 85.50,
            ],
            [
                'NIS_Siswa'           => 1111111111,
                'Kode_Mata_Pelajaran' => 'MP002',
                'Nilai'               => 92.75,
            ],
            // Tambahkan data lain jika diperlukan
        ];

        // Insert data ke tabel
        $this->db->table('Nilai_Siswa')->insertBatch($data);
    }
}

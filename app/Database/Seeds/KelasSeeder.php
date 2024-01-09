<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KelasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'Nama_Kelas' => 'Ceri',
                'Wali_Kelas' => '333333333333333333',
            ],
            // Tambahkan data lain jika diperlukan
        ];

        // Insert data ke tabel
        $this->db->table('Kelas')->insertBatch($data);
    }
}

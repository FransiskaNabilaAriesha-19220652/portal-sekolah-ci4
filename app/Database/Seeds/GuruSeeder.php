<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GuruSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'NIP'            => '333333333333333333',
                'Nama_Guru'      => 'burhan kamil',
                'Mata_Pelajaran' => 'Matematika',
                'Alamat'         => 'Jalan Guru 1',
                'Tanggal_Lahir'  => '1990-01-01',
                'Agama'          => 'Islam',
                'user_id'        => 3,
            ],
            // Tambahkan data lain jika diperlukan
        ];

        // Insert data ke tabel
        $this->db->table('Guru')->insertBatch($data);
    }
}

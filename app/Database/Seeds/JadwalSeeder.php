<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JadwalSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'Hari'                 => 'Senin',
                'Jam'                  => '08:00:00',
                'Kelas'                => 'XII IPA',
                'Kode_Mata_Pelajaran' => 'MP001',
                'NIP_Guru'             => '333333333333333333',
            ],
            [
                'Hari'                 => 'Selasa',
                'Jam'                  => '09:30:00',
                'Kelas'                => 'XII IPS',
                'Kode_Mata_Pelajaran' => 'MP002',
                'NIP_Guru'             => '333333333333333333',
            ],
        ];

        // Insert data ke tabel
        $this->db->table('jadwal')->insertBatch($data);
    }
}

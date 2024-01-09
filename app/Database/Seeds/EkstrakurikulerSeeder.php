<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EkstrakurikulerSeeder extends Seeder
{
    public function run()
    {
        // Data untuk di-seed
        $data = [
            [
                'Nama_Ekstrakurikuler'    => 'Pramuka',
                'Deskripsi'               => 'Kegiatan pramuka untuk pengembangan karakter siswa.',
                'NIP_Guru_Pembimbing'     => '333333333333333333',
            ],
            [
                'Nama_Ekstrakurikuler'    => 'Marching Band',
                'Deskripsi'               => 'Kegiatan marching band untuk pengembangan keterampilan musik siswa.',
                'NIP_Guru_Pembimbing'     => '333333333333333333',
            ],
            // Tambahkan data lain jika diperlukan
        ];

        // Insert data ke tabel
        $this->db->table('Ekstrakurikuler')->insertBatch($data);
    }
}

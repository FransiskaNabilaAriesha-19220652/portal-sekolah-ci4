<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run()
    {
        // Data untuk di-seed
        $data = [
            [
                'Nama_Kegiatan'              => 'Pentas Seni',
                'Tanggal'                    => '2023-02-15',
                'Deskripsi'                  => 'Pentas seni tahunan untuk menampilkan bakat siswa.',
                'ID_Ruangan'                 => 1, // Ganti dengan ID ruangan yang sesuai
                'NIP_Guru_Penanggung_Jawab' => '333333333333333333',
            ],
            [
                'Nama_Kegiatan'              => 'Lomba Pidato',
                'Tanggal'                    => '2023-03-10',
                'Deskripsi'                  => 'Lomba pidato tingkat sekolah.',
                'ID_Ruangan'                 => 2, // Ganti dengan ID ruangan yang sesuai
                'NIP_Guru_Penanggung_Jawab' => '333333333333333333',
            ],
            // Tambahkan data lain jika diperlukan
        ];

        // Insert data ke tabel
        $this->db->table('Event_Sekolah')->insertBatch($data);
    }
}

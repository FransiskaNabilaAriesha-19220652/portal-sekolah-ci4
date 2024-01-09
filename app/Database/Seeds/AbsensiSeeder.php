<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AbsensiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'NIS_Siswa' => 1111111111,
                'Tanggal'   => '2023-01-01',
                'Kehadiran' => 'Hadir',
            ],
            [
                'NIS_Siswa' => 1111111111,
                'Tanggal'   => '2023-01-02',
                'Kehadiran' => 'Sakit',
            ],
            [
                'NIS_Siswa' => 1111111111,
                'Tanggal'   => '2023-01-03',
                'Kehadiran' => 'Alpa',
            ],
            // Tambahkan data lain jika diperlukan
        ];

        // Insert data ke tabel
        $this->db->table('Absensi')->insertBatch($data);
    }
}

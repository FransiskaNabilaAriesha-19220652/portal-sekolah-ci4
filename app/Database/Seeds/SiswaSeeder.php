<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nis'    => 1809599001,
                'Nama_Siswa'    => 'fadil',
                'Kelas'         => 'bintang',
                'Alamat'        => 'Jl. Contoh No. 123',
                'Tanggal_Lahir' => '2005-01-15',
                'Agama'         => 'Islam',
            ],
            [
                'nis'    => 1629588004,
                'Nama_Siswa'    => 'lula',
                'Kelas'         => 'bunga ',
                'Alamat'        => 'Jl. Contoh No. 456',
                'Tanggal_Lahir' => '2004-07-22',
                'Agama'         => 'Kristen',
            ],
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO Siswa (Nama_Siswa, Kelas, Alamat, Tanggal_Lahir, Agama) VALUES(:nama_siswa:, :kelas:, :alamat:, :tanggal_lahir:, :agama:)", $data);

        // Using Query Builder
        $this->db->table('Siswa')->insertBatch($data);
    }
}

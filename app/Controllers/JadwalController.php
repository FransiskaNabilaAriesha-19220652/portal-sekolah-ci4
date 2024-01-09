<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JadwalModel;

class JadwalController extends BaseController
{
    public function index()
    {
        // Membuat instansi dari model
        $jadwalModel = new JadwalModel();

        // Mengambil data dari tabel jadwal
        $data['jadwal'] = $jadwalModel->findAll();

        // Menampilkan view dengan data jadwal
        return view('Pages/jadwal', $data);
    }
}

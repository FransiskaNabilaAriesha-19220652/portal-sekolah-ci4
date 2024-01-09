<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = service('session');
    }

    protected $beforeFilters = ['login'];

    public function index()
    {
        $user_id = session('user_id');

        if (!$user_id) {
            return redirect()->to(base_url('autentikasi'));
        }

        $data['user_level'] = session('user_level');

        // Ambil jenis pengguna dari sesi
        $userType = session('user_type');

        // Ambil ID pengguna dari sesi
        $userId = session('user_id');

        // Gunakan ID dan jenis pengguna untuk mengambil semua data dari database
        if ($userType == 'siswa') {
            // Gunakan model Siswa untuk mengambil semua data siswa
            $siswaModel = new \App\Models\SiswaModel();
            $allUserData = $siswaModel->findAll();

            // Tambahkan semua data ke array $data
            $data['users'] = $allUserData;
        } elseif ($userType == 'orang_tua') {
            // Gunakan model OrangTua untuk mengambil semua data orang tua
            $orangTuaModel = new \App\Models\OrangTuaModel();
            $allUserData = $orangTuaModel->findAll();

            // Tambahkan semua data ke array $data
            $data['users'] = $allUserData;
        } elseif ($userType == 'guru') {
            // Gunakan model Guru untuk mengambil semua data guru
            $guruModel = new \App\Models\GuruModel();
            $allUserData = $guruModel->findAll();

            // Tambahkan semua data ke array $data
            $data['users'] = $allUserData;
        }
        //var_dump($data);
        return view('pages/home', $data);
    }
}

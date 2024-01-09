<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Autentikasi extends BaseController
{
    public function index()
    {
        // Jika pengguna sudah login, arahkan ke halaman beranda atau halaman lain
        if (session()->get('user_id')) {
            return redirect()->to(base_url('home'));
        } else
            return view('login');
    }

    public function processLogin()
    {


        // Ambil data dari form login
        $nis_nip_id = $this->request->getPost('nis_nip_id');
        $password = (string) $this->request->getPost('password');

        // Lakukan verifikasi pengguna (contoh menggunakan model)
        $userModel = new UserModel();
        $userData = $userModel->where('NIS_NIP_ID', $nis_nip_id)->first();

        if ($userData && password_verify($password, $userData['Password'])) {
            // Login berhasil, atur sesi atau token autentikasi
            session()->set('user_level', $userData['Level']);
            session()->set('user_id', $userData['id']);
            session()->set('success', 'Login berhasil!');
            session()->set('user_data', $userData);
            session()->set('user_type', $this->getUserType($userData['Level'])); // Jenis pengguna

            // cek sesi 
            // var_dump(session()->get()); die;
            $data['user_level'] = session()->get();

            return redirect()->to(base_url('home'));
        } else {
            // Login gagal, tampilkan pesan error atau redirect kembali ke halaman login
            return redirect()->to(base_url('autentikasi'))->with('error', 'ID atau password salah.');
        }
    }

    protected function checkPermission($requiredLevel)
    {
        $userLevel = session()->get('user_level');

        if ($userLevel != $requiredLevel) {
            // Redirect atau tampilkan pesan error jika level pengguna tidak sesuai
            return redirect()->to(base_url('/'))->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
        }
    }

    protected function getUserType($level)
    {
        switch ($level) {
            case 1:
                return 'siswa';
            case 2:
                return 'orang_tua';
            case 3:
                return 'guru';
            default:
                return 'unknown';
        }
    }


    public function logout()
    {
        // Hapus semua data sesi
        session()->destroy();

        // Redirect ke halaman login
        return redirect()->to(base_url('autentikasi'))->with('success', 'Logout berhasil!');
    }
}

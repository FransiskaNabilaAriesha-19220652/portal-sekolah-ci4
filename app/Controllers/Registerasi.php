<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrangTuaModel;
use App\Models\SiswaModel;
use App\Models\UserModel;

class Registerasi extends BaseController
{
    public function index()
    {
        return view('registrasi');
    }

    public function process()
    {
        $validationRules = [
            'registrationType' => 'required',
            'nama' => 'required',
            'sandi' => 'required',
            'sandikonfirmasi' => 'required|matches[sandi]',
            // tambahkan aturan validasi sesuai kebutuhan Anda
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->to(base_url('register'))->withInput()->with('errors', $this->validator->getErrors());
        }

        $registrationType = $this->request->getPost('registrationType');
        $data = $this->request->getPost();

        if ($registrationType === 'siswa') {
            $this->saveSiswaData($data);
        } elseif ($registrationType === 'orangtua') {
            $this->saveOrangTuaData($data);
        }

        // Redirect to success page or do other operations as needed
        return redirect()->to('autentikasi')->with('success', 'Pendaftaran berhasil!');
    }
    private function saveSiswaData($data)
    {
        $siswaModel = new SiswaModel();
        $usersModel = new UserModel();

        // Data untuk tabel siswa
        $siswaData = [
            'NIS' => $data['nis'],
            'Nama_Siswa' => $data['nama'],
            'Kelas' => $data['kelas'],
            'Alamat' => $data['alamat'],
            'Tanggal_Lahir' => $data['tgl_lahir'],
            'Agama' => $data['agama_siswa'],
            'user_id' => 0, // Nilai awal user_id (akan diupdate setelah menyimpan ke tabel users)
            // tambahkan kolom lain sesuai kebutuhan
        ];

        // Data untuk tabel users
        $usersData = [
            'NIS_NIP_ID' => $data['nis'],
            'Level' => 1,
            'Password' => password_hash($data['sandi'], PASSWORD_DEFAULT),
            // tambahkan kolom lain sesuai kebutuhan
        ];

        // Simpan data ke tabel users
        $usersModel->insert($usersData);

        // Ambil ID yang baru saja dimasukkan ke tabel users
        $userId = $usersModel->insertID();

        // Update user_id pada tabel siswa dengan nilai ID dari tabel users
        $siswaData['user_id'] = $userId;
        $siswaModel->insert($siswaData);
    }

    private function saveOrangTuaData($data)
    {
        $orangTuaModel = new OrangTuaModel();
        $usersModel = new UserModel();

        // Data untuk tabel orang_tua
        $orangTuaData = [
            'ID_Orang_Tua' => $data['ktp'],
            'Nama_Orang_Tua' => $data['nama'],
            'Alamat' => $data['AlamatOrtu'],
            'Nomor_Telepon' => $data['No_hp'],
            'Email' => $data['email'],
            'NIS_Siswa' => $data['nis_ank'],
            'user_id' => 0, // Nilai awal user_id (akan diupdate setelah menyimpan ke tabel users)
            // tambahkan kolom lain sesuai kebutuhan
        ];

        // Data untuk tabel users
        $usersData = [
            'NIS_NIP_ID' => $data['ktp'],
            'Level' => 2,
            'Password' => password_hash($data['sandi'], PASSWORD_DEFAULT),
            // tambahkan kolom lain sesuai kebutuhan
        ];

        // Simpan data ke tabel users
        $usersModel->insert($usersData);

        // Ambil ID yang baru saja dimasukkan ke tabel users
        $userId = $usersModel->insertID();

        // Update user_id pada tabel orang_tua dengan nilai ID dari tabel users
        $orangTuaData['user_id'] = $userId;
        $orangTuaModel->insert($orangTuaData);
    }
}

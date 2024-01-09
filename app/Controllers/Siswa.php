<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SiswaModel;

class Siswa extends BaseController
{
    public function index()
    {
        $model = new SiswaModel();
        $data['siswa'] = $model->findAll();

        return view('siswa/index', $data);
    }

    public function create()
    {
        return view('siswa/create');
    }

    public function store()
    {
        $model = new SiswaModel();

        $validation = \Config\Services::validation();
        $validationRules = [
                'NIS' => 'required|is_unique[siswa.NIS]|numeric',
                'Nama_Siswa' => 'required',
                'Kelas' => 'required',
                'Alamat' => 'required',
                'Tanggal_Lahir' => 'required',
                'Agama' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->to('/siswa/create')->withInput()->with('validation', $validation);
        }

        $model->save([
            'NIS' => $this->request->getPost('NIS'),
            'Nama_Siswa' => $this->request->getPost('Nama_Siswa'),
            'Kelas' => $this->request->getPost('Kelas'),
            'Alamat' => $this->request->getPost('Alamat'),
            'Tanggal_Lahir' => $this->request->getPost('Tanggal_Lahir'),
            'Agama' => $this->request->getPost('Agama'),
        ]);

        return redirect()->to('/siswa');
    }

    public function edit($id)
    {
        $model = new SiswaModel();
        $data['siswa'] = $model->find($id);

        return view('siswa/edit', $data);
    }

    public function update($id)
    {
        $model = new SiswaModel();

        $validation = \Config\Services::validation();
        $validationRules = [
            'NIS' => 'required|is_unique[siswa.NIS,id,' . $id . ']|numeric',
            'Nama_Siswa' => 'required',
            'Kelas' => 'required',
            'Alamat' => 'required',
            'Tanggal_Lahir' => 'required',
            'Agama' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->to("/siswa/edit/$id")->withInput()->with('validation', $validation);
        }

        $model->update($id, [
            'NIS' => $this->request->getPost('NIS'),
            'Nama_Siswa' => $this->request->getPost('Nama_Siswa'),
            'Kelas' => $this->request->getPost('Kelas'),
            'Alamat' => $this->request->getPost('Alamat'),
            'Tanggal_Lahir' => $this->request->getPost('Tanggal_Lahir'),
            'Agama' => $this->request->getPost('Agama'),
        ]);

        return redirect()->to('/siswa');
    }

    public function delete($id)
    {
        $model = new SiswaModel();
        $model->delete($id);

        return redirect()->to('/siswa');
    }
}

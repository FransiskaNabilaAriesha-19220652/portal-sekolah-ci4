<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GuruModel;

class Guru extends BaseController
{
    public function index()
    {
        $model = new GuruModel();
        $data['guru'] = $model->findAll();

        return view('guru/index', $data);
    }

    public function create()
    {
        return view('guru/create');
    }

    public function store()
    {
        $model = new GuruModel();

        $validation = \Config\Services::validation();
        $validationRules = [
            'NIP' => 'required|is_unique[guru.NIP]|numeric',
            'Nama_Guru' => 'required',
            'Mata_Pelajaran' => 'required',
            'Alamat' => 'required',
            'Tanggal_Lahir' => 'required',
            'Agama' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->to('/guru/create')->withInput()->with('validation', $validation);
        }

        $model->save([
            'NIP' => $this->request->getPost('NIP'),
            'Nama_Guru' => $this->request->getPost('Nama_Guru'),
            'Mata_Pelajaran' => $this->request->getPost('Mata_Pelajaran'),
            'Alamat' => $this->request->getPost('Alamat'),
            'Tanggal_Lahir' => $this->request->getPost('Tanggal_Lahir'),
            'Agama' => $this->request->getPost('Agama'),
        ]);

        return redirect()->to('/guru');
    }

    public function edit($id)
    {
        $model = new GuruModel();
        $data['guru'] = $model->find($id);

        return view('guru/edit', $data);
    }

    public function update($id)
    {
        $model = new GuruModel();

        $validation = \Config\Services::validation();
        $validationRules = [
            'NIP' => 'required|is_unique[guru.NIP,id,' . $id . ']|numeric',
            'Nama_Guru' => 'required',
            'Mata_Pelajaran' => 'required',
            'Alamat' => 'required',
            'Tanggal_Lahir' => 'required',
            'Agama' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->to("/guru/edit/$id")->withInput()->with('validation', $validation);
        }

        $model->update($id, [
            'NIP' => $this->request->getPost('NIP'),
            'Nama_Guru' => $this->request->getPost('Nama_Guru'),
            'Mata_Pelajaran' => $this->request->getPost('Mata_Pelajaran'),
            'Alamat' => $this->request->getPost('Alamat'),
            'Tanggal_Lahir' => $this->request->getPost('Tanggal_Lahir'),
            'Agama' => $this->request->getPost('Agama'),
        ]);

        return redirect()->to('/guru');
    }

    public function delete($id)
    {
        $model = new GuruModel();
        $model->delete($id);

        return redirect()->to('/guru');
    }
}

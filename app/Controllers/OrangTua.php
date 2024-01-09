<?php

namespace App\Controllers;

use App\Models\OrangTuaModel;

class OrangTua extends BaseController
{
    public function index()
    {
        $model = new OrangTuaModel();
        $data['orang_tua'] = $model->findAll();

        return view('orang_tua/index', $data);
    }

    public function create()
    {
        return view('orang_tua/create');
    }

    public function store()
    {
        $model = new OrangTuaModel();
        $model->save($this->request->getPost());

        return redirect()->to('/orang-tua');
    }

    public function edit($id)
    {
        $model = new OrangTuaModel();
        $data['orang_tua'] = $model->find($id);

        return view('orang_tua/edit', $data);
    }

    public function update($id)
    {
        $model = new OrangTuaModel();
        $model->update($id, $this->request->getPost());

        return redirect()->to('/orang-tua');
    }

    public function delete($id)
    {
        $model = new OrangTuaModel();
        $model->delete($id);

        return redirect()->to('/orang-tua');
    }
}
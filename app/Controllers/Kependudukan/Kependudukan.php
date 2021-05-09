<?php

namespace App\Controllers\Kependudukan;

use \App\Controllers\BaseController;

class Kependudukan extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Penduduk',
      'penduduk' => $this->kependudukan->orderBy('id', 'desc')->findAll(),
    ];
    return view('kependudukan/index', $data);
  }

  public function new()
  {
    $data = [
      'title' => 'Tambah Penduduk',
      'validation' => $this->validation,
      'penduduk' => $this->kependudukan,
      'keluarga' => $this->keluarga->findAll(),
    ];
    return view('kependudukan/new', $data);
  }

  public function create()
  {
    if (!$this->validate($this->kependudukan->getValidationRules())) {
      return redirect()->back()->withInput();
    }
    $foto = $this->request->getFile('foto');
    $data = $this->request->getPost();
    if ($foto->getError() !== 4) {
      $data['foto'] = $foto->getName();
      $this->kependudukan->save($data);
      $foto->move('img/penduduk');
    } else {
      $data['foto'] = 'default.jpg';
      $this->kependudukan->save($data);
    }
    return redirect()->to('/kependudukan')->with('berhasil', 'Penduduk berhasil ditambah!');
  }

  public function edit($id = null)
  {
    $penduduk = $this->kependudukan->find($id);
    $data = [
      'title' => 'Ubah Data Penduduk',
      'validation' => $this->validation,
      'penduduk' => $penduduk,
      'keluarga' => $this->keluarga->where('id !=', $penduduk->keluarga_id)->findAll(),
      'penduduk_keluarga' => $this->keluarga->find($penduduk->keluarga_id),
    ];
    return view('kependudukan/edit', $data);
  }

  public function update($id)
  {
    if (!$this->validate($this->kependudukan->getValidationRules())) {
      return redirect()->back()->withInput();
    }
    $foto = $this->request->getFile('foto');
    $data = $this->request->getPost();
    $data['id'] = $id;
    if ($foto->getError() !== 4) {
      if ($data['fotoLama'] != 'default.jpg') {
        unlink("img/penduduk/{$data['fotoLama']}");
      }
      $data['foto'] = $foto->getName();
      $this->kependudukan->save($data);
      $foto->move('img/penduduk');
    } else {
      $this->kependudukan->save($data);
    }
    return redirect()->to('/kependudukan')->with('berhasil', 'Penduduk berhasil diubah!');
  }

  public function delete($id = null)
  {
    $data = $this->kependudukan->find($id);
    if ($data->foto !== 'default.jpg') unlink("img/penduduk/{$data->foto}");
    $this->kependudukan->delete($id);
    return redirect()->to('/kependudukan')->with('berhasil', 'Penduduk berhasil dihapus!');
  }
}

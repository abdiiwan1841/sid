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
    $data = [
      'title' => 'Ubah Data Penduduk',
      'validation' => $this->validation,
      'penduduk' => $this->kependudukan->find($id),
      'keluarga' => $this->keluarga->findAll(),
    ];
    return view('kependudukan/edit', $data);
  }
  
  public function update()
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
      $this->kependudukan->save($data);
    }
    return redirect()->to('/kependudukan')->with('berhasil', 'Penduduk berhasil diubah!');
  }

  public function delete($id = null)
  {
    $this->kependudukan->delete($id);
    return redirect()->to('/kependudukan')->with('berhasil', 'Penduduk berhasil dihapus!');
  }
}

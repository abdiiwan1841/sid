<?php

namespace App\Controllers\Kependudukan;

use App\Controllers\BaseController;

class Keluarga extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Management Keluarga',
			'keluarga' => $this->keluarga->orderBy('id', 'desc')->findAll(),
		];
		return view('kependudukan/keluarga/index', $data);
	}

	public function show($id = null)
	{
		//
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Keluarga',
			'validation' => $this->validation,
			'keluarga' => $this->keluarga->findAll(),
		];
		return view('kependudukan/keluarga/new', $data);
	}

	public function create()
	{
		if (!$this->validate($this->keluarga->getValidationRules())) {
			return redirect()->to('/kependudukan/keluarga/new')->withInput();
		}
		$data = $this->request->getPost();
		$this->keluarga->save($data);
		return redirect()->to('/kependudukan')->with('berhasil', 'Keluarga berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Data Penduduk',
			'validation' => $this->validation,
			'penduduk' => $this->kependudukan->findAll(),
			'keluarga' => $this->keluarga->find($id),
		];
		return view('kependudukan/keluarga/edit', $data);
	}

	public function update($id = null)
	{
		if (!$this->validate($this->keluarga->getValidationRules())) {
			return redirect()->to()->withInput();
		}
		$data = $this->request->getPost();
		$this->keluarga->save($data);
		return redirect()->to('/kependudukan')->with('berhasil', 'Keluarga berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->keluarga->delete($id);
		return redirect()->to('/kependudukan/keluarga')->with('berhasil', 'Keluarga berhasil dihapus!');
	}

	public function new_penduduk($keluarga_id)
	{
		$data = [
			'title' => 'Tambah Penduduk keluarga',
			'validation' => $this->validation,
			'keluarga' => $this->keluarga->find($keluarga_id),
			'ppenduduk' => $this->kependudukan->findAll(),
		];
		return view('kependudukan/keluarga/new-penduduk', $data);
	}
}

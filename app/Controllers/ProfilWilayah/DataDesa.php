<?php

namespace App\Controllers\ProfilWilayah;

use App\Controllers\BaseController;

class DataDesa extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Dusun Desa',
			'dataDesa' => $this->dataDesa->orderBy('id', 'DESC')->findAll(),
			'db' => $this->db,
		];
		return view('profil-wilayah/data-desa/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Data Dusun Desa'
		];
		return view('profil-wilayah/data-desa/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Dusun Desa',
			'validation' => $this->validation,
			'penduduk' => $this->kependudukan->findAll(),
			'data' => $this->dataDesa,
		];
		return view('profil-wilayah/data-desa/new', $data);
	}

	public function create()
	{
		if (!$this->validate($this->dataDesa->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->dataDesa->save($data);
		return redirect()->to(route_to('profil_wilayah_data_desa'))->with('berhasil', 'Data Dusun Desa berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$dataDesa = $this->dataDesa->find($id);
		$data = [
			'title' => 'Ubah Data Dusun Desa',
			'validation' => $this->validation,
			'data' => $dataDesa,
			'penduduk' => $this->kependudukan->where('id !=', $dataDesa->kepala_dusun)->findAll(),
			'data_penduduk' => $this->kependudukan->find($dataDesa->kepala_dusun),
		];
		return view('profil-wilayah/data-desa/edit', $data);
	}

	public function update($id = null)
	{
		if (!$this->validate($this->dataDesa->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$data['id'] = $id;
		$this->dataDesa->save($data);
		return redirect()->to(route_to('profil_wilayah_data_desa'))->with('berhasil', 'Data Dusun Desa berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->dataDesa->delete($id);
		return redirect()->to(route_to('profil_wilayah_data_desa'))->with('berhasil', 'Data Dusun Desa berhasil dihapus!');
	}
}

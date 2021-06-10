<?php

namespace App\Controllers\ProfilWilayah;

use App\Controllers\BaseController;

class DataPotensi extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Potensi',
			'dataPotensi' => $this->dataPotensi->orderBy('id', 'DESC')->findAll(),
			'dataDesa' => $this->dataDesa,
		];
		return view('profil-wilayah/data-potensi/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Data Potensi'
		];
		return view('profil-wilayah/data-potensi/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Potensi',
			'validation' => $this->validation,
			'data' => $this->dataPotensi,
			'desa' =>  $this->dataDesa->findAll(),
		];
		return view('profil-wilayah/data-potensi/new', $data);
	}

	public function create()
	{
		if (!$this->validate($this->dataPotensi->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->dataPotensi->save($data);
		return redirect()->to(route_to('profil_wilayah_data_potensi'))->with('berhasil', 'Data berhasil ditambah!');
	}

	public function edit($id = null)
	{
	  $dataPotensi = $this->dataPotensi->find($id);
		$data = [
			'title' => 'Ubah Data',
			'validation' => $this->validation,
			'data' => $dataPotensi,
			'data_desa' =>  $this->dataDesa->where('id', $dataPotensi->dusun_id ?? 1)->first(),
			'desa' =>  $this->dataDesa->where('id !=', $dataPotensi->dusun_id ?? 1)->findAll(),
		];
		return view('profil-wilayah/data-potensi/edit', $data);
	}

	public function update($id = null)
	{
		$data = $this->request->getPost();
		if (!$this->validate($this->dataPotensi->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$this->dataPotensi->save($data);
		return redirect()->to(route_to('profil_wilayah_data_potensi'))->with('berhasil', 'Data berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->dataPotensi->delete($id);
		return redirect()->to(route_to('profil_wilayah_data_potensi'))->with('berhasil', 'Data berhasil dihapus!');
	}
}

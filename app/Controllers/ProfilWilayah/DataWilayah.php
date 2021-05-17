<?php

namespace App\Controllers\ProfilWilayah;

use App\Controllers\BaseController;

class DataWilayah extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Wilayah',
			'dataWilayah' => $this->dataWilayah->orderBy('id', 'DESC')->findAll(),
			'dataDesa' => $this->dataDesa,
		];
		return view('profil-wilayah/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Data Wilayah'
		];
		return view('profil-wilayah/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Wilayah',
			'validation' => $this->validation,
			'data' => $this->dataWilayah,
			'desa' =>  $this->dataDesa->findAll(),
		];
		return view('profil-wilayah/new', $data);
	}

	public function create()
	{
		if (!$this->validate($this->dataWilayah->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->dataWilayah->save($data);
		return redirect()->to(route_to('profil_wilayah_data_wilayah'))->with('berhasil', 'Data Wilayah berhasil ditambah!');
	}

	public function edit($id = null)
	{
	  $dataWilayah = $this->dataWilayah->find($id);
		$data = [
			'title' => 'Ubah Data Wilayah',
			'validation' => $this->validation,
			'data' => $dataWilayah,
			'data_desa' =>  $this->dataDesa->where('id', $dataWilayah->dusun_id ?? 1)->first(),
			'desa' =>  $this->dataDesa->where('id !=', $dataWilayah->dusun_id ?? 1)->findAll(),
		];
		return view('profil-wilayah/edit', $data);
	}

	public function update($id = null)
	{
		$data = $this->request->getPost();
		$data['id'] = $id;
		if (!$this->validate($this->dataWilayah->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$this->dataWilayah->save($data);
		return redirect()->to(route_to('profil_wilayah_data_wilayah'))->with('berhasil', 'Data Wilayah berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->dataWilayah->delete($id);
		return redirect()->to(route_to('profil_wilayah_data_wilayah'))->with('berhasil', 'Data Wilayah berhasil dihapus!');
	}
}

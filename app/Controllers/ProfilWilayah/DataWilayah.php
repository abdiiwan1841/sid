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
		$data = [
			'title' => 'Ubah Data Wilayah',
			'validation' => $this->validation,
			'data' => $this->dataWilayah->find($id),
		];
		return view('profil-wilayah/edit', $data);
	}

	public function update($id = null)
	{
		$data = $this->request->getPost();
		$data['id'] = $id;
		$this->dataWilayah->setValidationRules([
			'dusun' => "required|is_unique[data_wilayah.dusun,id,{$id}]"
		]);
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

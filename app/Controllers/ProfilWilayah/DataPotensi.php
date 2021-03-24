<?php

namespace App\Controllers\ProfilWilayah;

use App\Controllers\BaseController;

class DataPotensi extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Potensi'
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
		];
		return view('profil-wilayah/data-potensi/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->dataPotensi->getValidationRules())) {
		// 	return redirect()->to(route_to('profil_wilayah_data_potensi_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->dataPotensi->save($data);
		return redirect()->to(route_to('profil_wilayah_data_potensi'))->with('berhasil', 'Data Potensi berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Data Potensi',
			'validation' => $this->validation,
			// 'dokumen' => $this->dataPotensi->find($id),
		];
		return view('profil-wilayah/data-potensi/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->dataPotensi->getValidationRules())) {
		// 	return redirect()->to(route_to('profil_wilayah_data_potensi_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->dataPotensi->save($data);
		return redirect()->to(route_to('profil_wilayah_data_potensi'))->with('berhasil', 'Data Potensi berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->dataPotensi->delete($id);
		return redirect()->to(route_to('profil_wilayah_data_potensi'))->with('berhasil', 'Data Potensi berhasil dihapus!');
	}
}

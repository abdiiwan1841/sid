<?php

namespace App\Controllers\ProfilWilayah;

use App\Controllers\BaseController;

class DataDesa extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Desa/Kelurahan'
		];
		return view('profil-wilayah/data-desa/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Data Desa/Kelurahan'
		];
		return view('profil-wilayah/data-desa/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Desa/Kelurahan',
			'validation' => $this->validation,
		];
		return view('profil-wilayah/data-desa/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->dataDesa->getValidationRules())) {
		// 	return redirect()->to(route_to('profil_wilayah_data_desa_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->dataDesa->save($data);
		return redirect()->to(route_to('profil_wilayah_data_desa'))->with('berhasil', 'Data Desa/Kelurahan berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Data Desa/Kelurahan',
			'validation' => $this->validation,
			// 'dokumen' => $this->dataDesa->find($id),
		];
		return view('profil-wilayah/data-desa/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->dataDesa->getValidationRules())) {
		// 	return redirect()->to(route_to('profil_wilayah_data_desa_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->dataDesa->save($data);
		return redirect()->to(route_to('profil_wilayah_data_desa'))->with('berhasil', 'Data Desa/Kelurahan berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->dataDesa->delete($id);
		return redirect()->to(route_to('profil_wilayah_data_desa'))->with('berhasil', 'Data Desa/Kelurahan berhasil dihapus!');
	}
}

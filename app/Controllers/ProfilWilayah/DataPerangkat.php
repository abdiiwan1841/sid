<?php

namespace App\Controllers\ProfilWilayah;

use App\Controllers\BaseController;

class DataPerangkat extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Perangkat'
		];
		return view('profil-wilayah/data-perangkat/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Data Perangkat'
		];
		return view('profil-wilayah/data-perangkat/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Perangkat',
			'validation' => $this->validation,
		];
		return view('profil-wilayah/data-perangkat/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->dataPerangkat->getValidationRules())) {
		// 	return redirect()->to(route_to('profil_wilayah_data_perangkat_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->dataPerangkat->save($data);
		return redirect()->to(route_to('profil_wilayah_data_perangkat'))->with('berhasil', 'Data Perangkat berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Data Perangkat',
			'validation' => $this->validation,
			// 'dokumen' => $this->dataPerangkat->find($id),
		];
		return view('profil-wilayah/data-perangkat/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->dataPerangkat->getValidationRules())) {
		// 	return redirect()->to(route_to('profil_wilayah_data_perangkat_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->dataPerangkat->save($data);
		return redirect()->to(route_to('profil_wilayah_data_perangkat'))->with('berhasil', 'Data Perangkat berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->dataPerangkat->delete($id);
		return redirect()->to(route_to('profil_wilayah_data_perangkat'))->with('berhasil', 'Data Perangkat berhasil dihapus!');
	}
}

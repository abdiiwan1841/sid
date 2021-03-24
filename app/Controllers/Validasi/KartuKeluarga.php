<?php

namespace App\Controllers\Validasi;

use App\Controllers\BaseController;

class KartuKeluarga extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Kartu Keluarga'
		];
		return view('validasi/kartu-keluarga/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Data Kartu Keluarga'
		];
		return view('validasi/kartu-keluarga/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Kartu Keluarga',
			'validation' => $this->validation,
		];
		return view('validasi/kartu-keluarga/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->kartuKeluarga->getValidationRules())) {
		// 	return redirect()->to(route_to('validasi_kartu_keluarga_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->kartuKeluarga->save($data);
		return redirect()->to(route_to('validasi_kartu_keluarga'))->with('berhasil', 'Data Kartu Keluarga berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Data Kartu Keluarga',
			'validation' => $this->validation,
			// 'dokumen' => $this->kartuKeluarga->find($id),
		];
		return view('validasi/kartu-keluarga/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->kartuKeluarga->getValidationRules())) {
		// 	return redirect()->to(route_to('validasi_kartu_keluarga_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->kartuKeluarga->save($data);
		return redirect()->to(route_to('validasi_kartu_keluarga'))->with('berhasil', 'Data Kartu Keluarga berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->kartuKeluarga->delete($id);
		return redirect()->to(route_to('validasi_kartu_keluarga'))->with('berhasil', 'Data Kartu Keluarga berhasil dihapus!');
	}
}


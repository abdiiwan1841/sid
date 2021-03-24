<?php

namespace App\Controllers\Validasi;

use App\Controllers\BaseController;

class Usia extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Usia'
		];
		return view('validasi/usia/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Data Usia'
		];
		return view('validasi/usia/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Usia',
			'validation' => $this->validation,
		];
		return view('validasi/usia/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->usia->getValidationRules())) {
		// 	return redirect()->to(route_to('validasi_usia_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->usia->save($data);
		return redirect()->to(route_to('validasi_usia'))->with('berhasil', 'Data Usia berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Data Usia',
			'validation' => $this->validation,
			// 'dokumen' => $this->usia->find($id),
		];
		return view('validasi/usia/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->usia->getValidationRules())) {
		// 	return redirect()->to(route_to('validasi_usia_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->usia->save($data);
		return redirect()->to(route_to('validasi_usia'))->with('berhasil', 'Data Usia berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->usia->delete($id);
		return redirect()->to(route_to('validasi_usia'))->with('berhasil', 'Data Usia berhasil dihapus!');
	}
}

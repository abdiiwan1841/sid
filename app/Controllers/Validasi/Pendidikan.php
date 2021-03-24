<?php

namespace App\Controllers\Validasi;

use App\Controllers\BaseController;

class Pendidikan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Pendidikan'
		];
		return view('validasi/pendidikan/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Data Pendidikan'
		];
		return view('validasi/pendidikan/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Pendidikan',
			'validation' => $this->validation,
		];
		return view('validasi/pendidikan/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->pendidikan->getValidationRules())) {
		// 	return redirect()->to(route_to('validasi_pendidikan_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->pendidikan->save($data);
		return redirect()->to(route_to('validasi_pendidikan'))->with('berhasil', 'Data Pendidikan berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Data Pendidikan',
			'validation' => $this->validation,
			// 'dokumen' => $this->pendidikan->find($id),
		];
		return view('validasi/pendidikan/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->pendidikan->getValidationRules())) {
		// 	return redirect()->to(route_to('validasi_pendidikan_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->pendidikan->save($data);
		return redirect()->to(route_to('validasi_pendidikan'))->with('berhasil', 'Data Pendidikan berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->pendidikan->delete($id);
		return redirect()->to(route_to('validasi_pendidikan'))->with('berhasil', 'Data Pendidikan berhasil dihapus!');
	}
}


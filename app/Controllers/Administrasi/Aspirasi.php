<?php

namespace App\Controllers\Administrasi;

use App\Controllers\BaseController;

class Aspirasi extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Aspirasi'
		];
		return view('administrasi/aspirasi/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Aspirasi'
		];
		return view('administrasi/aspirasi/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Aspirasi',
			'validation' => $this->validation,
		];
		return view('administrasi/aspirasi/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->aspirasi->getValidationRules())) {
		// 	return redirect()->to(route_to('administrasi_aspirasi_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->aspirasi->save($data);
		return redirect()->to(route_to('administrasi_aspirasi'))->with('berhasil', 'Aspirasi berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Aspirasi',
			'validation' => $this->validation,
			// 'dokumen' => $this->aspirasi->find($id),
		];
		return view('administrasi/aspirasi/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->aspirasi->getValidationRules())) {
		// 	return redirect()->to(route_to('administrasi_aspirasi_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->aspirasi->save($data);
		return redirect()->to(route_to('administrasi_aspirasi'))->with('berhasil', 'Aspirasi berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->aspirasi->delete($id);
		return redirect()->to(route_to('administrasi_aspirasi'))->with('berhasil', 'Aspirasi berhasil dihapus!');
	}
}

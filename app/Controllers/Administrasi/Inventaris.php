<?php

namespace App\Controllers\Administrasi;

use App\Controllers\BaseController;

class Inventaris extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Inventaris'
		];
		return view('administrasi/inventaris/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Inventaris'
		];
		return view('administrasi/inventaris/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Inventaris',
			'validation' => $this->validation,
		];
		return view('administrasi/inventaris/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->inventaris->getValidationRules())) {
		// 	return redirect()->to(route_to('administrasi_inventaris'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->inventaris->save($data);
		return redirect()->to(route_to('administrasi_inventaris'))->with('berhasil', 'Inventaris berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Inventaris',
			'validation' => $this->validation,
			// 'dokumen' => $this->inventaris->find($id),
		];
		return view('administrasi/inventaris/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->inventaris->getValidationRules())) {
		// 	return redirect()->to(route_to('administrasi_inventaris',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->inventaris->save($data);
		return redirect()->to(route_to('administrasi_inventaris'))->with('berhasil', 'Inventaris berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->inventaris->delete($id);
		return redirect()->to(route_to('administrasi_inventaris'))->with('berhasil', 'Inventaris berhasil dihapus!');
	}
}


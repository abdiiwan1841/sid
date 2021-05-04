<?php

namespace App\Controllers\DataApbd;

use App\Controllers\BaseController;

class Belanja extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Anggaran - Belanja'
		];
		return view('data-apbd/belanja/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Data Anggaran - Belanja'
		];
		return view('data-apbd/belanja/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Anggaran - Belanja',
			'validation' => $this->validation,
		];
		return view('data-apbd/belanja/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->belanja->getValidationRules())) {
		// 	return redirect()->to(route_to('data_apbd_belanja'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->belanja->save($data);
		return redirect()->to(route_to('data_apbd_belanja'))->with('berhasil', 'Data Anggaran - Belanja berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Data Anggaran - Belanja',
			'validation' => $this->validation,
			// 'dokumen' => $this->belanja->find($id),
		];
		return view('data-apbd/belanja/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->belanja->getValidationRules())) {
		// 	return redirect()->to(route_to('data_apbd_belanja',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->belanja->save($data);
		return redirect()->to(route_to('data_apbd_belanja'))->with('berhasil', 'Data Anggaran - Belanja berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->belanja->delete($id);
		return redirect()->to(route_to('data_apbd_belanja'))->with('berhasil', 'Data Anggaran - Belanja berhasil dihapus!');
	}
}


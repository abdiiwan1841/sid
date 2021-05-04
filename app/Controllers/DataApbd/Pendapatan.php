<?php

namespace App\Controllers\DataApbd;

use App\Controllers\BaseController;

class Pendapatan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Anggaran - Pendapatan'
		];
		return view('data-apbd/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Data Anggaran - Pendapatan'
		];
		return view('data-apbd/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Anggaran - Pendapatan',
			'validation' => $this->validation,
		];
		return view('data-apbd/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->pendapatan->getValidationRules())) {
		// 	return redirect()->to(route_to('data_apbd_pendapatan'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->pendapatan->save($data);
		return redirect()->to(route_to('data_apbd_pendapatan'))->with('berhasil', 'Data Anggaran - Pendapatan berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Data Anggaran - Pendapatan',
			'validation' => $this->validation,
			// 'dokumen' => $this->pendapatan->find($id),
		];
		return view('data-apbd/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->pendapatan->getValidationRules())) {
		// 	return redirect()->to(route_to('data_apbd_pendapatan',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->pendapatan->save($data);
		return redirect()->to(route_to('data_apbd_pendapatan'))->with('berhasil', 'Data Anggaran - Pendapatan berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->pendapatan->delete($id);
		return redirect()->to(route_to('data_apbd_pendapatan'))->with('berhasil', 'Data Anggaran - Pendapatan berhasil dihapus!');
	}
}

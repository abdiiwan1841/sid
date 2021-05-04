<?php

namespace App\Controllers\DataApbd;

use App\Controllers\BaseController;

class Pembiayaan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Anggaran - Pembiayaan'
		];
		return view('data-apbd/pembiayaan/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Data Anggaran - Pembiayaan'
		];
		return view('data-apbd/pembiayaan/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Anggaran - Pembiayaan',
			'validation' => $this->validation,
		];
		return view('data-apbd/pembiayaan/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->pendapatan->getValidationRules())) {
		// 	return redirect()->to(route_to('data_apbd_pembiayaan'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->pendapatan->save($data);
		return redirect()->to(route_to('data_apbd_pembiayaan'))->with('berhasil', 'Data Anggaran - Pembiayaan berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Data Anggaran - Pembiayaan',
			'validation' => $this->validation,
			// 'dokumen' => $this->pendapatan->find($id),
		];
		return view('data-apbd/pembiayaan/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->pendapatan->getValidationRules())) {
		// 	return redirect()->to(route_to('data_apbd_pembiayaan',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->pendapatan->save($data);
		return redirect()->to(route_to('data_apbd_pembiayaan'))->with('berhasil', 'Data Anggaran - Pembiayaan berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->pendapatan->delete($id);
		return redirect()->to(route_to('data_apbd_pembiayaan'))->with('berhasil', 'Data Angaran - Pembiayaan berhasil dihapus!');
	}
}


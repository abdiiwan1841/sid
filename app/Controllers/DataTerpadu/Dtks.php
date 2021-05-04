<?php

namespace App\Controllers\DataTerpadu;

use App\Controllers\BaseController;

class Dtks extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'DTKS'
		];
		return view('data-terpadu/dtks/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'DTKS'
		];
		return view('data-terpadu/dtks/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah DTKS',
			'validation' => $this->validation,
		];
		return view('data-terpadu/dtks/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->dtks->getValidationRules())) {
		// 	return redirect()->to(route_to('data_terpadu_dtks_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->dtks->save($data);
		return redirect()->to(route_to('data_terpadu_dtks'))->with('berhasil', 'DTKS berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah DTKS',
			'validation' => $this->validation,
			// 'dokumen' => $this->dtks->find($id),
		];
		return view('data-terpadu/dtks/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->dtks->getValidationRules())) {
		// 	return redirect()->to(route_to('data_terpadu_dtks_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->dtks->save($data);
		return redirect()->to(route_to('data_terpadu_dtks'))->with('berhasil', 'DTKS berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->dtks->delete($id);
		return redirect()->to(route_to('data_terpadu_dtks'))->with('berhasil', 'DTKS berhasil dihapus!');
	}
}

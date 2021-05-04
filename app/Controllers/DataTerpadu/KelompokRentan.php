<?php

namespace App\Controllers\DataTerpadu;

use App\Controllers\BaseController;

class KelompokRentan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Kelompok Rentan'
		];
		return view('data-terpadu/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Kelompok Rentan'
		];
		return view('data-terpadu/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Kelompok Rentan',
			'validation' => $this->validation,
		];
		return view('data-terpadu/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->kelompokRentan->getValidationRules())) {
		// 	return redirect()->to(route_to('data_terpadu_kelompok_rentan_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->kelompokRentan->save($data);
		return redirect()->to(route_to('data_terpadu_kelompok_rentan'))->with('berhasil', 'Kelompok Rentan berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Kelompok Rentan',
			'validation' => $this->validation,
			// 'dokumen' => $this->kelompokRentan->find($id),
		];
		return view('data-terpadu/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->kelompokRentan->getValidationRules())) {
		// 	return redirect()->to(route_to('data_terpadu_kelompok_rentan_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->kelompokRentan->save($data);
		return redirect()->to(route_to('data_terpadu_kelompok_rentan'))->with('berhasil', 'Kelompok Rentan berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->kelompokRentan->delete($id);
		return redirect()->to(route_to('data_terpadu_kelompok_rentan'))->with('berhasil', 'Kelompok Rentan berhasil dihapus!');
	}
}

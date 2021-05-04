<?php

namespace App\Controllers\DataTerpadu;

use App\Controllers\BaseController;

class ButaHuruf extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Buta Huruf'
		];
		return view('data-terpadu/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Buta Huruf'
		];
		return view('data-terpadu/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Buta Huruf',
			'validation' => $this->validation,
		];
		return view('data-terpadu/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->butaHuruf->getValidationRules())) {
		// 	return redirect()->to(route_to('data_terpadu_buta_huruf_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->butaHuruf->save($data);
		return redirect()->to(route_to('data_terpadu_buta_huruf'))->with('berhasil', 'Buta Huruf berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Buta Huruf',
			'validation' => $this->validation,
			// 'dokumen' => $this->butaHuruf->find($id),
		];
		return view('data-terpadu/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->butaHuruf->getValidationRules())) {
		// 	return redirect()->to(route_to('data_terpadu_buta_huruf_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->butaHuruf->save($data);
		return redirect()->to(route_to('data_terpadu_buta_huruf'))->with('berhasil', 'Buta Huruf berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->butaHuruf->delete($id);
		return redirect()->to(route_to('data_terpadu_buta_huruf'))->with('berhasil', 'Buta Huruf berhasil dihapus!');
	}
}

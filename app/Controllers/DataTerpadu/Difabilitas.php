<?php

namespace App\Controllers\DataTerpadu;

use App\Controllers\BaseController;

class Difabilitas extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Kelompok Rentan'
		];
		return view('data-terpadu/difabilitas/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Kelompok Rentan'
		];
		return view('data-terpadu/difabilitas/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Kelompok Rentan',
			'validation' => $this->validation,
		];
		return view('data-terpadu/difabilitas/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->difabilitas->getValidationRules())) {
		// 	return redirect()->to(route_to('data_terpadu_difabilitas_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->difabilitas->save($data);
		return redirect()->to(route_to('data_terpadu_difabilitas'))->with('berhasil', 'Kelompok Rentan berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Kelompok Rentan',
			'validation' => $this->validation,
			// 'dokumen' => $this->difabilitas->find($id),
		];
		return view('data-terpadu/difabilitas/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->difabilitas->getValidationRules())) {
		// 	return redirect()->to(route_to('data_terpadu_difabilitas_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->difabilitas->save($data);
		return redirect()->to(route_to('data_terpadu_difabilitas'))->with('berhasil', 'Kelompok Rentan berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->difabilitas->delete($id);
		return redirect()->to(route_to('data_terpadu_difabilitas'))->with('berhasil', 'Kelompok Rentan berhasil dihapus!');
	}
}

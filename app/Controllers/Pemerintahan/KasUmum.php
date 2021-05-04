<?php

namespace App\Controllers\Pemerintahan;

use App\Controllers\BaseController;

class KasUmum extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Kas Umum'
		];
		return view('pemerintahan/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Kas Umum'
		];
		return view('pemerintahan/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Kas Umum',
			'validation' => $this->validation,
		];
		return view('pemerintahan/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->kasUmum->getValidationRules())) {
		// 	return redirect()->to(route_to('pemerintahan_kas_umum'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->kasUmum->save($data);
		return redirect()->to(route_to('pemerintahan_kas_umum'))->with('berhasil', 'Kas Umum berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Kas Umum',
			'validation' => $this->validation,
			// 'dokumen' => $this->kasUmum->find($id),
		];
		return view('pemerintahan/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->kasUmum->getValidationRules())) {
		// 	return redirect()->to(route_to('pemerintahan_kas_umum',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->kasUmum->save($data);
		return redirect()->to(route_to('pemerintahan_kas_umum'))->with('berhasil', 'Kas Umum berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->kasUmum->delete($id);
		return redirect()->to(route_to('pemerintahan_kas_umum'))->with('berhasil', 'Kas Umum berhasil dihapus!');
	}
}

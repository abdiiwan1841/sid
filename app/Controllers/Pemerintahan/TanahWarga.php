<?php

namespace App\Controllers\Pemerintahan;

use App\Controllers\BaseController;

class TanahWarga extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Tanah Warga'
		];
		return view('pemerintahan/tanah-warga/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Tanah Warga'
		];
		return view('pemerintahan/tanah-warga/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Tanah Warga',
			'validation' => $this->validation,
		];
		return view('pemerintahan/tanah-warga/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->tanahWarga->getValidationRules())) {
		// 	return redirect()->to(route_to('pemerintahan_tanah_warga'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->tanahWarga->save($data);
		return redirect()->to(route_to('pemerintahan_tanah_warga'))->with('berhasil', 'Tanah Warga berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Tanah Warga',
			'validation' => $this->validation,
			// 'dokumen' => $this->tanahWarga->find($id),
		];
		return view('pemerintahan/tanah-warga/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->tanahWarga->getValidationRules())) {
		// 	return redirect()->to(route_to('pemerintahan_tanah_warga',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->tanahWarga->save($data);
		return redirect()->to(route_to('pemerintahan_tanah_warga'))->with('berhasil', 'Tanah Warga berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->tanahWarga->delete($id);
		return redirect()->to(route_to('pemerintahan_tanah_warga'))->with('berhasil', 'Tanah warga berhasil dihapus!');
	}
}


<?php

namespace App\Controllers\Statistik;

use App\Controllers\BaseController;

class Pendidikan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Statistik pendidikan'
		];
		return view('statistik/pendidikan/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Statistik pendidikan'
		];
		return view('statistik/pendidikan/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Statistik pendidikan',
			'validation' => $this->validation,
		];
		return view('statistik/pendidikan/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->statistikPendidikan->getValidationRules())) {
		// 	return redirect()->to(route_to('statistik_pendidikan_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->statistikPendidikan->save($data);
		return redirect()->to(route_to('statistik_pendidikan'))->with('berhasil', 'Statistik pendidikan berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Statistik pendidikan',
			'validation' => $this->validation,
			// 'dokumen' => $this->statistikPendidikan->find($id),
		];
		return view('statistik/pendidikan/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->statistikPendidikan->getValidationRules())) {
		// 	return redirect()->to(route_to('statistik_pendidikan_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->statistikPendidikan->save($data);
		return redirect()->to(route_to('statistik_pendidikan'))->with('berhasil', 'Statistik pendidikan berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->statistikPendidikan->delete($id);
		return redirect()->to(route_to('statistik_pendidikan'))->with('berhasil', 'Statistik pendidikan berhasil dihapus!');
	}
}

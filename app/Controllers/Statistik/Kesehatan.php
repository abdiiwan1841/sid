<?php

namespace App\Controllers\Statistik;

use App\Controllers\BaseController;

class Kesehatan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Statistik Kesehatan'
		];
		return view('statistik/kesehatan/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Statistik Kesehatan'
		];
		return view('statistik/kesehatan/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Statistik Kesehatan',
			'validation' => $this->validation,
		];
		return view('statistik/kesehatan/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->statistikKesehatan->getValidationRules())) {
		// 	return redirect()->to(route_to('statistik_kesehatan_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->statistikKesehatan->save($data);
		return redirect()->to(route_to('statistik_kesehatan'))->with('berhasil', 'Statistik Kesehatan berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Statistik Kesehatan',
			'validation' => $this->validation,
			// 'dokumen' => $this->statistikKesehatan->find($id),
		];
		return view('statistik/kesehatan/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->statistikKesehatan->getValidationRules())) {
		// 	return redirect()->to(route_to('statistik_kesehatan_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->statistikKesehatan->save($data);
		return redirect()->to(route_to('statistik_kesehatan'))->with('berhasil', 'Statistik Kesehatan berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->statistikKesehatan->delete($id);
		return redirect()->to(route_to('statistik_kesehatan'))->with('berhasil', 'Statistik Kesehatan berhasil dihapus!');
	}
}

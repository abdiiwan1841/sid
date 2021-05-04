<?php

namespace App\Controllers\Statistik;

use App\Controllers\BaseController;

class Kependudukan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Statistik Kependudukan'
		];
		return view('statistik/kependudukan/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Statistik Kependudukan'
		];
		return view('statistik/kependudukan/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Statistik Kependudukan',
			'validation' => $this->validation,
		];
		return view('statistik/kependudukan/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->statistikKependudukan->getValidationRules())) {
		// 	return redirect()->to(route_to('statistik_kependudukan_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->statistikKependudukan->save($data);
		return redirect()->to(route_to('statistik_lahan'))->with('berhasil', 'Statistik Kependudukan berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Statistik Kependudukan',
			'validation' => $this->validation,
			// 'dokumen' => $this->statistikKependudukan->find($id),
		];
		return view('statistik/kependudukan/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->statistikKependudukan->getValidationRules())) {
		// 	return redirect()->to(route_to('statistik_kependudukan_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->statistikKependudukan->save($data);
		return redirect()->to(route_to('statistik_lahan'))->with('berhasil', 'Statistik Kependudukan berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->statistikKependudukan->delete($id);
		return redirect()->to(route_to('statistik_lahan'))->with('berhasil', 'Statistik Kependudukan berhasil dihapus!');
	}
}

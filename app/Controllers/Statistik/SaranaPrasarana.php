<?php

namespace App\Controllers\Statistik;

use App\Controllers\BaseController;

class SaranaPrasarana extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Statistik Sarana & Prasarana'
		];
		return view('statistik/sarana-prasarana/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Statistik Sarana & Prasarana'
		];
		return view('statistik/sarana-prasarana/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Statistik Sarana & Prasarana',
			'validation' => $this->validation,
		];
		return view('statistik/sarana-prasarana/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->statistikSaranaPrasarana->getValidationRules())) {
		// 	return redirect()->to(route_to('statistik_sarana_prasarana_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->statistikSaranaPrasarana->save($data);
		return redirect()->to(route_to('statistik_sarana_prasarana'))->with('berhasil', 'Statistik Sarana & Prasarana berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Statistik Sarana & Prasarana',
			'validation' => $this->validation,
			// 'dokumen' => $this->statistikSaranaPrasarana->find($id),
		];
		return view('statistik/sarana-prasarana/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->statistikSaranaPrasarana->getValidationRules())) {
		// 	return redirect()->to(route_to('statistik_sarana_prasarana_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->statistikSaranaPrasarana->save($data);
		return redirect()->to(route_to('statistik_sarana_prasarana'))->with('berhasil', 'Statistik Sarana & Prasarana berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->statistikSaranaPrasarana->delete($id);
		return redirect()->to(route_to('statistik_sarana_prasarana'))->with('berhasil', 'Statistik Sarana & Prasarana berhasil dihapus!');
	}
}

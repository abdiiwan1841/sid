<?php

namespace App\Controllers\Statistik;

use App\Controllers\BaseController;

class ApbdDesa extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Statistik APBD Desa'
		];
		return view('statistik/apbd-desa/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Statistik APBD Desa'
		];
		return view('statistik/apbd-desa/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Statistik APBD Desa',
			'validation' => $this->validation,
		];
		return view('statistik/apbd-desa/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->statistikApbdDesa->getValidationRules())) {
		// 	return redirect()->to(route_to('statistik_apbd_desa_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->statistikApbdDesa->save($data);
		return redirect()->to(route_to('statistik_apbd_desa'))->with('berhasil', 'Statistik APBD Desa berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Statistik APBD Desa',
			'validation' => $this->validation,
			// 'dokumen' => $this->statistikApbdDesa->find($id),
		];
		return view('statistik/apbd-desa/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->statistikApbdDesa->getValidationRules())) {
		// 	return redirect()->to(route_to('statistik_apbd_desa_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->statistikApbdDesa->save($data);
		return redirect()->to(route_to('statistik_apbd_desa'))->with('berhasil', 'Statistik APBD Desa berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->statistikApbdDesa->delete($id);
		return redirect()->to(route_to('statistik_apbd_desa'))->with('berhasil', 'Statistik APBD Desa berhasil dihapus!');
	}
}

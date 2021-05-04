<?php

namespace App\Controllers\Statistik;

use App\Controllers\BaseController;

class Administrasi extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Statistik Administrasi'
		];
		return view('statistik/administrasi/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Statistik Administrasi'
		];
		return view('statistik/administrasi/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Statistik Administrasi',
			'validation' => $this->validation,
		];
		return view('statistik/administrasi/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->statistikAdministrasi->getValidationRules())) {
		// 	return redirect()->to(route_to('statistik_administrasi_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->statistikAdministrasi->save($data);
		return redirect()->to(route_to('statistik_administrasi'))->with('berhasil', 'Statistik Administrasi berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Statistik Administrasi',
			'validation' => $this->validation,
			// 'dokumen' => $this->statistikAdministrasi->find($id),
		];
		return view('statistik/administrasi/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->statistikAdministrasi->getValidationRules())) {
		// 	return redirect()->to(route_to('statistik_administrasi_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->statistikAdministrasi->save($data);
		return redirect()->to(route_to('statistik_administrasi'))->with('berhasil', 'Statistik Administrasi berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->statistikAdministrasi->delete($id);
		return redirect()->to(route_to('statistik_administrasi'))->with('berhasil', 'Statistik Administrasi berhasil dihapus!');
	}
}

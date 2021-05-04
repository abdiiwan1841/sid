<?php

namespace App\Controllers\Administrasi;

use App\Controllers\BaseController;

class LayananAdministrasi extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Administrasi'
		];
		return view('administrasi/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Administrasi'
		];
		return view('administrasi/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Administrasi',
			'validation' => $this->validation,
		];
		return view('administrasi/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->layananAdministrasi->getValidationRules())) {
		// 	return redirect()->to(route_to('administrasi_layanan_administrasi_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->layananAdministrasi->save($data);
		return redirect()->to(route_to('administrasi_layanan_administrasi'))->with('berhasil', 'Administrasi berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Administrasi',
			'validation' => $this->validation,
			// 'dokumen' => $this->layananAdministrasi->find($id),
		];
		return view('administrasi/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->layananAdministrasi->getValidationRules())) {
		// 	return redirect()->to(route_to('administrasi_layanan_administrasi_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->layananAdministrasi->save($data);
		return redirect()->to(route_to('administrasi_layanan_administrasi'))->with('berhasil', 'Administrasi berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->layananAdministrasi->delete($id);
		return redirect()->to(route_to('administrasi_layanan_administrasi'))->with('berhasil', 'Administrasi berhasil dihapus!');
	}
}

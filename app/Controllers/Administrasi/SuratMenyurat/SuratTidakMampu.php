<?php

namespace App\Controllers\Administrasi\SuratMenyurat;

use App\Controllers\BaseController;

class SuratTidakMampu extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Surat Tidak Mampu'
		];
		return view('administrasi/surat-menyurat/surat-tidak-mampu/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Surat Tidak Mampu'
		];
		return view('administrasi/surat-menyurat/surat-tidak-mampu/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Surat Tidak Mampu',
			'validation' => $this->validation,
		];
		return view('administrasi/surat-menyurat/surat-tidak-mampu/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->suratTidakMampu->getValidationRules())) {
		// 	return redirect()->to(route_to('surat_elektronik_surat_tidak_mampu'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->suratTidakMampu->save($data);
		return redirect()->to(route_to('surat_elektronik_surat_tidak_mampu'))->with('berhasil', 'Surat Tidak Mampu berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Surat Tidak Mampu',
			'validation' => $this->validation,
			// 'dokumen' => $this->suratTidakMampu->find($id),
		];
		return view('administrasi/surat-menyurat/surat-tidak-mampu/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->suratTidakMampu->getValidationRules())) {
		// 	return redirect()->to(route_to('surat_elektronik_surat_tidak_mampu',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->suratTidakMampu->save($data);
		return redirect()->to(route_to('surat_elektronik_surat_tidak_mampu'))->with('berhasil', 'Surat Tidak Mampu berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->suratTidakMampu->delete($id);
		return redirect()->to(route_to('surat_elektronik_surat_tidak_mampu'))->with('berhasil', 'Surat Tidak Mampu berhasil dihapus!');
	}
}

<?php

namespace App\Controllers\Administrasi\SuratMenyurat;

use App\Controllers\BaseController;

class SuratUsaha extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Surat Usaha'
		];
		return view('administrasi/surat-menyurat/surat-usaha/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Surat Usaha'
		];
		return view('administrasi/surat-menyurat/surat-usaha/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Surat Usaha',
			'validation' => $this->validation,
		];
		return view('administrasi/surat-menyurat/surat-usaha/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->suratUsaha->getValidationRules())) {
		// 	return redirect()->to(route_to('surat_elektronik_surat_usaha'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->suratUsaha->save($data);
		return redirect()->to(route_to('surat_elektronik_surat_usaha'))->with('berhasil', 'Surat Usaha berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Surat Usaha',
			'validation' => $this->validation,
			// 'dokumen' => $this->suratUsaha->find($id),
		];
		return view('administrasi/surat-menyurat/surat-usaha/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->suratUsaha->getValidationRules())) {
		// 	return redirect()->to(route_to('surat_elektronik_surat_usaha',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->suratUsaha->save($data);
		return redirect()->to(route_to('surat_elektronik_surat_usaha'))->with('berhasil', 'Surat Usaha berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->suratUsaha->delete($id);
		return redirect()->to(route_to('surat_elektronik_surat_usaha'))->with('berhasil', 'Surat Usaha berhasil dihapus!');
	}
}

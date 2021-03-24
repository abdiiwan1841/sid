<?php

namespace App\Controllers\Kependudukan;

use App\Controllers\BaseController;

class DokumenKependudukan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Dokumen Kependudukan'
		];
		return view('kependudukan/dokumen/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Dokumen Kependudukan'
		];
		return view('kependudukan/dokumen/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Dokumen Kependudukan',
			'validation' => $this->validation,
		];
		return view('kependudukan/dokumen/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->dokumenKependudukan->getValidationRules())) {
		// 	return redirect()->to(route_to('kependudukan_dokumen_kependudukan_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->dokumenKependudukan->save($data);
		return redirect()->to(route_to('kependudukan_dokumen_kependudukan'))->with('berhasil', 'Dokumen Kependudukan berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Dokumen Kependudukan',
			'validation' => $this->validation,
			// 'dokumen' => $this->dokumenKependudukan->find($id),
		];
		return view('kependudukan/dokumen/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->dokumenKependudukan->getValidationRules())) {
		// 	return redirect()->to(route_to('kependudukan_dokumen_kependudukan_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->dokumenKependudukan->save($data);
		return redirect()->to(route_to('kependudukan_dokumen_kependudukan'))->with('berhasil', 'Dokumen Kependudukan berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->dokumenKependudukan->delete($id);
		return redirect()->to(route_to('kependudukan_dokumen_kependudukan'))->with('berhasil', 'Dokumen Kependudukan berhasil dihapus!');
	}
}

<?php

namespace App\Controllers\Administrasi\SuratMenyurat;

use App\Controllers\BaseController;

class SuratMeninggal extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Surat Meninggal'
		];
		return view('administrasi/surat-menyurat/surat-meninggal/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Surat Meninggal'
		];
		return view('administrasi/surat-menyurat/surat-meninggal/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Surat Meninggal',
			'validation' => $this->validation,
		];
		return view('administrasi/surat-menyurat/surat-meninggal/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->suratMeninggal->getValidationRules())) {
		// 	return redirect()->to(route_to('surat_elektronik_surat_meninggal'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->suratMeninggal->save($data);
		return redirect()->to(route_to('surat_elektronik_surat_meninggal'))->with('berhasil', 'Surat Meninggal berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Surat Meninggal',
			'validation' => $this->validation,
			// 'dokumen' => $this->suratMeninggal->find($id),
		];
		return view('administrasi/surat-menyurat/surat-meninggal/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->suratMeninggal->getValidationRules())) {
		// 	return redirect()->to(route_to('surat_elektronik_surat_meninggal',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->suratMeninggal->save($data);
		return redirect()->to(route_to('surat_elektronik_surat_meninggal'))->with('berhasil', 'Surat Meninggal berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->suratMeninggal->delete($id);
		return redirect()->to(route_to('surat_elektronik_surat_meninggal'))->with('berhasil', 'Surat meninggal berhasil dihapus!');
	}
}

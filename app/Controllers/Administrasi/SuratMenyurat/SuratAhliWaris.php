<?php

namespace App\Controllers\Administrasi\SuratMenyurat;

use App\Controllers\BaseController;

class SuratAhliWaris extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Surat Ahli Waris'
		];
		return view('administrasi/surat-menyurat/surat-ahli-waris/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Surat Ahli Waris'
		];
		return view('administrasi/surat-menyurat/surat-ahli-waris/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Surat Ahli Waris',
			'validation' => $this->validation,
		];
		return view('administrasi/surat-menyurat/surat-ahli-waris/new', $data);
	}

	public function create()
	{
		if (!$this->validate($this->suratAhliWaris->getValidationRules())) {
			return redirect()->to(route_to('surat_elektronik_surat_ahli_waris'))->withInput();
		}
		$data = $this->request->getPost();
		$this->suratAhliWaris->save($data);
		return redirect()->to(route_to('surat_elektronik_surat_ahli_waris'))->with('berhasil', 'Surat Ahli Waris berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Surat Ahli Waris',
			'validation' => $this->validation,
			// 'dokumen' => $this->suratAhliWaris->find($id),
		];
		return view('administrasi/surat-menyurat/surat-ahli-waris/edit', $data);
	}

	public function update($id = null)
	{
		if (!$this->validate($this->suratAhliWaris->getValidationRules())) {
			return redirect()->to(route_to('surat_elektronik_surat_ahli_waris', 1))->withInput();
		}
		$data = $this->request->getPost();
		$this->suratAhliWaris->save($data);
		return redirect()->to(route_to('surat_elektronik_surat_ahli_waris'))->with('berhasil', 'Surat Ahli Waris berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->suratAhliWaris->delete($id);
		return redirect()->to(route_to('surat_elektronik_surat_ahli_waris'))->with('berhasil', 'Surat ahli Waris berhasil dihapus!');
	}
}

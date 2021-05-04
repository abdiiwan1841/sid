<?php

namespace App\Controllers\DataTerpadu;

use App\Controllers\BaseController;

class BantuanSosial extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Bantuan Sosial'
		];
		return view('data-terpadu/bantuan-sosial/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Bantuan Sosial'
		];
		return view('data-terpadu/bantuan-sosial/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Bantuan Sosial',
			'validation' => $this->validation,
		];
		return view('data-terpadu/bantuan-sosial/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->bantuanSosial->getValidationRules())) {
		// 	return redirect()->to(route_to('data_terpadu_bantuan_sosial_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->bantuanSosial->save($data);
		return redirect()->to(route_to('data_terpadu_bantuan_sosial'))->with('berhasil', 'Bantuan Sosial berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Bantuan Sosial',
			'validation' => $this->validation,
			// 'dokumen' => $this->bantuanSosial->find($id),
		];
		return view('data-terpadu/bantuan-sosial/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->bantuanSosial->getValidationRules())) {
		// 	return redirect()->to(route_to('data_terpadu_bantuan_sosial_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->bantuanSosial->save($data);
		return redirect()->to(route_to('data_terpadu_bantuan_sosial'))->with('berhasil', 'Bantuan Sosial berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->bantuanSosial->delete($id);
		return redirect()->to(route_to('data_terpadu_bantuan_sosial'))->with('berhasil', 'Bantuan Sosial berhasil dihapus!');
	}
}

<?php

namespace App\Controllers\DataTerpadu;

use App\Controllers\BaseController;

class PutusSekolah extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Putus Sekolah'
		];
		return view('data-terpadu/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Putus Sekolah'
		];
		return view('data-terpadu/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Putus Sekolah',
			'validation' => $this->validation,
		];
		return view('data-terpadu/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->putusSekolah->getValidationRules())) {
		// 	return redirect()->to(route_to('data_terpadu_putus_sekolah_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->putusSekolah->save($data);
		return redirect()->to(route_to('data_terpadu_putus_sekolah'))->with('berhasil', 'Putus Sekolah berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Putus Sekolah',
			'validation' => $this->validation,
			// 'dokumen' => $this->putusSekolah->find($id),
		];
		return view('data-terpadu/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->putusSekolah->getValidationRules())) {
		// 	return redirect()->to(route_to('data_terpadu_putus_sekolah_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->putusSekolah->save($data);
		return redirect()->to(route_to('data_terpadu_putus_sekolah'))->with('berhasil', 'Putus Sekolah berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->putusSekolah->delete($id);
		return redirect()->to(route_to('data_terpadu_putus_sekolah'))->with('berhasil', 'Putus Sekolah berhasil dihapus!');
	}
}

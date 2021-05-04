<?php

namespace App\Controllers\Validasi;

use App\Controllers\BaseController;

class DataKependudukan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Kependudukan'
		];
		return view('validasi/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Data Kependudukan'
		];
		return view('validasi/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Kependudukan',
			'validation' => $this->validation,
		];
		return view('validasi/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->dataKependudukan->getValidationRules())) {
		// 	return redirect()->to(route_to('validasi_data_kependudukan_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->dataKependudukan->save($data);
		return redirect()->to(route_to('validasi_data_kependudukan'))->with('berhasil', 'Data Kependudukan berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Data Kependudukan',
			'validation' => $this->validation,
			// 'dokumen' => $this->dataKependudukan->find($id),
		];
		return view('validasi/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->dataKependudukan->getValidationRules())) {
		// 	return redirect()->to(route_to('validasi_data_kependudukan_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->dataKependudukan->save($data);
		return redirect()->to(route_to('validasi_data_kependudukan'))->with('berhasil', 'Data Kependudukan berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->dataKependudukan->delete($id);
		return redirect()->to(route_to('validasi_data_kependudukan'))->with('berhasil', 'Data Kependudukan berhasil dihapus!');
	}
}

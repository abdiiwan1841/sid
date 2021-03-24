<?php

namespace App\Controllers\Validasi;

use App\Controllers\BaseController;

class PembaruanData extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Pembaruan'
		];
		return view('validasi/pembaruan-data/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Data Pembaruan'
		];
		return view('validasi/pembaruan-data/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Pembaruan',
			'validation' => $this->validation,
		];
		return view('validasi/pembaruan-data/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->pembaruanData->getValidationRules())) {
		// 	return redirect()->to(route_to('validasi_pembaruan_data_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->pembaruanData->save($data);
		return redirect()->to(route_to('validasi_pembaruan_data'))->with('berhasil', 'Data Pembaruan berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Data Pembaruan',
			'validation' => $this->validation,
			// 'dokumen' => $this->pembaruanData->find($id),
		];
		return view('validasi/pembaruan-data/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->pembaruanData->getValidationRules())) {
		// 	return redirect()->to(route_to('validasi_pembaruan_data_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->pembaruanData->save($data);
		return redirect()->to(route_to('validasi_pembaruan_data'))->with('berhasil', 'Data Pembaruan berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->pembaruanData->delete($id);
		return redirect()->to(route_to('validasi_pembaruan_data'))->with('berhasil', 'Data Pembaruan berhasil dihapus!');
	}
}


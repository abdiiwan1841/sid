<?php

namespace App\Controllers\Kependudukan;

use App\Controllers\BaseController;

class DataPeristiwa extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Peristiwa'
		];
		return view('kependudukan/data-peristiwa/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Data Peristiwa'
		];
		return view('kependudukan/data-peristiwa/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Peristiwa',
			'validation' => $this->validation,
		];
		return view('kependudukan/data-peristiwa/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->dataPeristiwa->getValidationRules())) {
		// 	return redirect()->to(route_to('kependudukan_data_peristiwa_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->dataPeristiwa->save($data);
		return redirect()->to(route_to('kependudukan_data_peristiwa'))->with('berhasil', 'Data Peristiwa berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Data Peristiwa',
			'validation' => $this->validation,
			// 'dokumen' => $this->dataPeristiwa->find($id),
		];
		return view('kependudukan/data-peristiwa/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->dataPeristiwa->getValidationRules())) {
		// 	return redirect()->to(route_to('kependudukan_data_peristiwa_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->dataPeristiwa->save($data);
		return redirect()->to(route_to('kependudukan_data_peristiwa'))->with('berhasil', 'Data Peristiwa berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->dataPeristiwa->delete($id);
		return redirect()->to(route_to('kependudukan_data_peristiwa'))->with('berhasil', 'Data Peristiwa berhasil dihapus!');
	}
}


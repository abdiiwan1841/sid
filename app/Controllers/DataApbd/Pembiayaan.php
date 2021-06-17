<?php

namespace App\Controllers\DataApbd;

use App\Controllers\BaseController;

class Pembiayaan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Anggaran Pembiayaan',
			'pembiayaan' => $this->pembiayaan->orderBy('id', 'DESC')->findAll(),
			'pembiayaan_model' => $this->pembiayaan,
		];
		return view('data-apbd/pembiayaan/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'pembiayaan'
		];
		return view('data-apbd/pembiayaan/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Anggaran Pembiayaan',
			'validation' => $this->validation,
			'data' => $this->pembiayaan,
		];
		return view('data-apbd/pembiayaan/new', $data);
	}

	public function create()
	{
		$data = $this->request->getPost();
		$this->pembiayaan->save($data);
		return redirect()->to(route_to('data_apbd_pembiayaan'))->with('berhasil', 'Data berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$pembiayaan = $this->pembiayaan->find($id);
		$data = [
			'title' => 'Ubah data Anggaran Pembiayaan',
			'validation' => $this->validation,
			'data' => $pembiayaan,
		];
		return view('data-apbd/pembiayaan/edit', $data);
	}

	public function update($id = null)
	{

		$data = $this->request->getPost();
		$this->pembiayaan->save($data);
		return redirect()->to(route_to('data_apbd_pembiayaan'))->with('berhasil', 'Data berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->pembiayaan->delete($id);
		return redirect()->to(route_to('data_apbd_pembiayaan'))->with('berhasil', 'Data berhasil dihapus!');
	}
}


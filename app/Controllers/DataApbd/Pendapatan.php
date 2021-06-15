<?php

namespace App\Controllers\DataApbd;

use App\Controllers\BaseController;

class Pendapatan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Anggaran Pendapatan',
			'pendapatan' => $this->pendapatan->orderBy('id', 'DESC')->findAll(),
			'pendapatan_model' => $this->pendapatan,
		];
		return view('data-apbd/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'pendapatan'
		];
		return view('data-apbd/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data anggaran pendapatan',
			'validation' => $this->validation,
			'data' => $this->pendapatan,
		];
		return view('data-apbd/new', $data);
	}

	public function create()
	{
		$data = $this->request->getPost();
		$this->pendapatan->save($data);
		return redirect()->to(route_to('data_apbd_pendapatan'))->with('berhasil', 'Data berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$pendapatan = $this->pendapatan->find($id);
		$data = [
			'title' => 'Ubah data anggaran pendapatan',
			'validation' => $this->validation,
			'data' => $pendapatan,
		];
		return view('data-apbd/edit', $data);
	}

	public function update($id = null)
	{

		$data = $this->request->getPost();
		$this->pendapatan->save($data);
		return redirect()->to(route_to('data_apbd_pendapatan'))->with('berhasil', 'Data berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->pendapatan->delete($id);
		return redirect()->to(route_to('data_apbd_pendapatan'))->with('berhasil', 'Data berhasil dihapus!');
	}
}

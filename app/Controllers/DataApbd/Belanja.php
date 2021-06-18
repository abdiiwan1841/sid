<?php

namespace App\Controllers\DataApbd;

use App\Controllers\BaseController;

class Belanja extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Anggaran Belanja',
			'belanja' => $this->belanja->orderBy('id', 'DESC')->findAll(),
			'belanja_model' => $this->belanja,
		];
		return view('data-apbd/belanja/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'belanja'
		];
		return view('data-apbd/belanja/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Anggaran Belanja',
			'validation' => $this->validation,
			'data' => $this->belanja,
		];
		return view('data-apbd/belanja/new', $data);
	}

	public function create()
	{
		$data = $this->request->getPost();
		$this->belanja->save($data);
		return redirect()->to(route_to('data_apbd_belanja'))->with('berhasil', 'Data berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$belanja = $this->belanja->find($id);
		$data = [
			'title' => 'Ubah data Anggaran Belanja',
			'validation' => $this->validation,
			'data' => $belanja,
		];
		return view('data-apbd/belanja/edit', $data);
	}

	public function update($id = null)
	{
		$data = $this->request->getPost();
		$this->belanja->save($data);
		return redirect()->to(route_to('data_apbd_belanja'))->with('berhasil', 'Data berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->belanja->delete($id);
		return redirect()->to(route_to('data_apbd_belanja'))->with('berhasil', 'Data berhasil dihapus!');
	}
}

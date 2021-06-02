<?php

namespace App\Controllers\DataTerpadu;

use App\Controllers\BaseController;

class BantuanSosial extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Tuna Karya',
			'bantuan_sosial' => $this->bantuanSosial->orderBy('id', 'DESC')->findAll(),
			'penduduk' => $this->kependudukan,
		];
		return view('data-terpadu/bantuan-sosial/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Tuna Karya'
		];
		return view('data-terpadu/bantuan-sosial/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Tuna Karya',
			'validation' => $this->validation,
			'penduduk' => $this->kependudukan->findAll(),
			'bantuan_sosial' => $this->bantuanSosial,
		];
		return view('data-terpadu/bantuan-sosial/new', $data);
	}

	public function create()
	{
		if (!$this->validate($this->bantuanSosial->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->bantuanSosial->save($data);
		return redirect()->to(route_to('data_terpadu_bantuan_sosial'))->with('berhasil', 'Data berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$bantuan_sosial = $this->bantuanSosial->find($id);
		$data = [
			'title' => 'Ubah Tuna Karya',
			'validation' => $this->validation,
			'bantuan_sosial' => $bantuan_sosial,
			'penduduk' => $this->kependudukan->where('id !=', $bantuan_sosial->penduduk_id ?? 1)->findAll(),
			'data_penduduk' =>  $this->kependudukan->where('id', $bantuan_sosial->penduduk_id ?? 1)->first(),
		];
		return view('data-terpadu/bantuan-sosial/edit', $data);
	}

	public function update($id = null)
	{
		if (!$this->validate($this->bantuanSosial->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->bantuanSosial->save($data);
		return redirect()->to(route_to('data_terpadu_bantuan_sosial'))->with('berhasil', 'Data berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->bantuanSosial->delete($id);
		return redirect()->to(route_to('data_terpadu_bantuan_sosial'))->with('berhasil', 'Data berhasil dihapus!');
	}
}

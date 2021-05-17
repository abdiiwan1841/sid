<?php

namespace App\Controllers\DataTerpadu;

use App\Controllers\BaseController;

class TunaKarya extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Tuna Karya',
			'tuna_karya' => $this->tunaKarya->orderBy('id', 'DESC')->findAll(),
			'penduduk' => $this->kependudukan,
		];
		return view('data-terpadu/tuna-karya/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Tuna Karya'
		];
		return view('data-terpadu/tuna-karya/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Tuna Karya',
			'validation' => $this->validation,
			'penduduk' => $this->kependudukan->findAll(),
			'tuna_karya' => $this->tunaKarya,
		];
		return view('data-terpadu/tuna-karya/new', $data);
	}

	public function create()
	{
		if (!$this->validate($this->tunaKarya->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->tunaKarya->save($data);
		return redirect()->to(route_to('data_terpadu_tuna_karya'))->with('berhasil', 'Data berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$tuna_karya = $this->tunaKarya->find($id);
		$data = [
			'title' => 'Ubah Tuna Karya',
			'validation' => $this->validation,
			'tuna_karya' => $tuna_karya,
			'penduduk' => $this->kependudukan->where('id !=', $tuna_karya->penduduk_id ?? 1)->findAll(),
			'data_penduduk' =>  $this->kependudukan->where('id', $tuna_karya->penduduk_id ?? 1)->first(),
		];
		return view('data-terpadu/tuna-karya/edit', $data);
	}

	public function update($id = null)
	{
		if (!$this->validate($this->tunaKarya->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->tunaKarya->save($data);
		return redirect()->to(route_to('data_terpadu_tuna_karya'))->with('berhasil', 'Data berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->tunaKarya->delete($id);
		return redirect()->to(route_to('data_terpadu_tuna_karya'))->with('berhasil', 'Data berhasil dihapus!');
	}
}

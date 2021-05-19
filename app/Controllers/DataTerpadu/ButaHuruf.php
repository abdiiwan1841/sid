<?php

namespace App\Controllers\DataTerpadu;

use App\Controllers\BaseController;

class ButaHuruf extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Buta Huruf',
			'buta_huruf' => $this->butaHuruf->orderBy('id', 'DESC')->findAll(),
			'penduduk' => $this->kependudukan,
		];
		return view('data-terpadu/buta-huruf/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Buta Huruf'
		];
		return view('data-terpadu/buta-huruf/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Buta Huruf',
			'validation' => $this->validation,
			'penduduk' => $this->kependudukan->findAll(),
			'buta_huruf' => $this->butaHuruf,
		];
		return view('data-terpadu/buta-huruf/new', $data);
	}

	public function create()
	{
		if (!$this->validate($this->butaHuruf->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->butaHuruf->save($data);
		return redirect()->to(route_to('data_terpadu_buta_huruf'))->with('berhasil', 'Data berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$buta_huruf = $this->butaHuruf->find($id);
		$data = [
			'title' => 'Ubah Buta Huruf',
			'validation' => $this->validation,
			'buta_huruf' => $buta_huruf,
			'penduduk' => $this->kependudukan->where('id !=', $buta_huruf->penduduk_id ?? 1)->findAll(),
			'data_penduduk' =>  $this->kependudukan->where('id', $buta_huruf->penduduk_id ?? 1)->first(),
		];
		return view('data-terpadu/buta-huruf/edit', $data);
	}

	public function update($id = null)
	{
		if (!$this->validate($this->butaHuruf->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->butaHuruf->save($data);
		return redirect()->to(route_to('data_terpadu_buta_huruf'))->with('berhasil', 'Data berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->butaHuruf->delete($id);
		return redirect()->to(route_to('data_terpadu_buta_huruf'))->with('berhasil', 'Data berhasil dihapus!');
	}
}

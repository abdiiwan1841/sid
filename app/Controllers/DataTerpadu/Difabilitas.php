<?php

namespace App\Controllers\DataTerpadu;

use App\Controllers\BaseController;

class Difabilitas extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Difabilitas',
			'difabilitas' => $this->difabilitas->orderBy('id', 'DESC')->findAll(),
			'penduduk' => $this->kependudukan,
		];
		return view('data-terpadu/difabilitas/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Difabilitas'
		];
		return view('data-terpadu/difabilitas/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Difabilitas',
			'validation' => $this->validation,
			'penduduk' => $this->kependudukan->findAll(),
			'difabilitas' => $this->difabilitas,
		];
		return view('data-terpadu/difabilitas/new', $data);
	}

	public function create()
	{
		if (!$this->validate($this->difabilitas->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->difabilitas->save($data);
		return redirect()->to(route_to('data_terpadu_difabilitas'))->with('berhasil', 'Data berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$difabilitas = $this->difabilitas->find($id);
		$data = [
			'title' => 'Ubah Difabilitas',
			'validation' => $this->validation,
			'difabilitas' => $difabilitas,
			'penduduk' => $this->kependudukan->where('id !=', $difabilitas->penduduk_id ?? 1)->findAll(),
			'data_penduduk' =>  $this->kependudukan->where('id', $difabilitas->penduduk_id ?? 1)->first(),
		];
		return view('data-terpadu/difabilitas/edit', $data);
	}

	public function update($id = null)
	{
		if (!$this->validate($this->difabilitas->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->difabilitas->save($data);
		return redirect()->to(route_to('data_terpadu_difabilitas'))->with('berhasil', 'Data berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->difabilitas->delete($id);
		return redirect()->to(route_to('data_terpadu_difabilitas'))->with('berhasil', 'Data berhasil dihapus!');
	}
}

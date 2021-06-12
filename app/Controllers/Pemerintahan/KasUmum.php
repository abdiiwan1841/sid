<?php

namespace App\Controllers\Pemerintahan;

use App\Controllers\BaseController;

class KasUmum extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Kas Umum',
			'kas_umum' => $this->kasUmum->orderBy('id', 'DESC')->findAll(),
			'penduduk' => $this->kependudukan,
		];
		return view('pemerintahan/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Kas Umum'
		];
		return view('pemerintahan/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Kas Umum',
			'validation' => $this->validation,
			'penduduk' => $this->kependudukan->findAll(),
			'kas_umum' => $this->kasUmum,
		];
		return view('pemerintahan/new', $data);
	}

	public function create()
	{
		if (!$this->validate($this->kasUmum->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->kasUmum->save($data);
		return redirect()->to(route_to('pemerintahan_kas_umum'))->with('berhasil', 'Kas berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$kas_umum = $this->kasUmum->find($id);
		$data = [
			'title' => 'Ubah Kas Umum',
			'validation' => $this->validation,
			'kas_umum' => $kas_umum,
			'penduduk' => $this->kependudukan->where('id !=', $kas_umum->penduduk_id ?? 1)->findAll(),
			'data_penduduk' =>  $this->kependudukan->where('id', $kas_umum->penduduk_id ?? 1)->first(),
		];
		return view('pemerintahan/edit', $data);
	}

	public function update($id = null)
	{
		if (!$this->validate($this->kasUmum->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->kasUmum->save($data);
		return redirect()->to(route_to('pemerintahan_kas_umum'))->with('berhasil', 'Kas berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->kasUmum->delete($id);
		return redirect()->to(route_to('pemerintahan_kas_umum'))->with('berhasil', 'Kas berhasil dihapus!');
	}
}

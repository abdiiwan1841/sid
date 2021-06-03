<?php

namespace App\Controllers\Kependudukan;

use App\Controllers\BaseController;

class DokumenKependudukan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Dokumen Kependudukan',
			'dokumen_kependudukan' => $this->dokumenKependudukan->orderBy('id', 'DESC')->findAll(),
			'penduduk' => $this->kependudukan,
		];
		return view('kependudukan/dokumen-kependudukan/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Dokumen Kependudukan'
		];
		return view('kependudukan/dokumen-kependudukan/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Dokumen Kependudukan',
			'validation' => $this->validation,
			'penduduk' => $this->kependudukan->findAll(),
			'dokumen_kependudukan' => $this->dokumenKependudukan,
		];
		return view('kependudukan/dokumen-kependudukan/new', $data);
	}

	public function create()
	{
		if (!$this->validate($this->dokumenKependudukan->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->dokumenKependudukan->save($data);
		return redirect()->to(route_to('kependudukan_dokumen_kependudukan'))->with('berhasil', 'Data berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$dokumen_kependudukan = $this->dokumenKependudukan->find($id);
		$data = [
			'title' => 'Ubah Dokumen Kependudukan',
			'validation' => $this->validation,
			'dokumen_kependudukan' => $dokumen_kependudukan,
			'penduduk' => $this->kependudukan->where('id !=', $dokumen_kependudukan->penduduk_id ?? 1)->findAll(),
			'data_penduduk' =>  $this->kependudukan->where('id', $dokumen_kependudukan->penduduk_id ?? 1)->first(),
		];
		return view('kependudukan/dokumen-kependudukan/edit', $data);
	}

	public function update($id = null)
	{
		if (!$this->validate($this->dokumenKependudukan->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->dokumenKependudukan->save($data);
		return redirect()->to(route_to('kependudukan_dokumen_kependudukan'))->with('berhasil', 'Data berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->dokumenKependudukan->delete($id);
		return redirect()->to(route_to('kependudukan_dokumen_kependudukan'))->with('berhasil', 'Data berhasil dihapus!');
	}
}

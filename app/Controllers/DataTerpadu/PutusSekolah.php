<?php

namespace App\Controllers\DataTerpadu;

use App\Controllers\BaseController;

class PutusSekolah extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Putus Sekolah',
			'putus_sekolah' => $this->putusSekolah->orderBy('id', 'DESC')->findAll(),
			'penduduk' => $this->kependudukan,
		];
		return view('data-terpadu/putus-sekolah/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Putus Sekolah'
		];
		return view('data-terpadu/putus-sekolah/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Putus Sekolah',
			'validation' => $this->validation,
			'penduduk' => $this->kependudukan->findAll(),
			'putus_sekolah' => $this->putusSekolah,
		];
		return view('data-terpadu/putus-sekolah/new', $data);
	}

	public function create()
	{
		if (!$this->validate($this->putusSekolah->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->putusSekolah->save($data);
		return redirect()->to(route_to('data_terpadu_putus_sekolah'))->with('berhasil', 'Data berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$putus_sekolah = $this->putusSekolah->find($id);
		$data = [
			'title' => 'Ubah Putus Sekolah',
			'validation' => $this->validation,
			'putus_sekolah' => $putus_sekolah,
			'penduduk' => $this->kependudukan->where('id !=', $putus_sekolah->penduduk_id ?? 1)->findAll(),
			'data_penduduk' =>  $this->kependudukan->where('id', $putus_sekolah->penduduk_id ?? 1)->first(),
		];
		return view('data-terpadu/putus-sekolah/edit', $data);
	}

	public function update($id = null)
	{
		if (!$this->validate($this->putusSekolah->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->putusSekolah->save($data);
		return redirect()->to(route_to('data_terpadu_putus_sekolah'))->with('berhasil', 'Data berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->putusSekolah->delete($id);
		return redirect()->to(route_to('data_terpadu_putus_sekolah'))->with('berhasil', 'Data berhasil dihapus!');
	}
}

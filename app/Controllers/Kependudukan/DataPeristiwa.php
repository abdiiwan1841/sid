<?php

namespace App\Controllers\Kependudukan;

use App\Controllers\BaseController;

class DataPeristiwa extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data Peristiwa',
			'data_peristiwa' => $this->dataPeristiwa->orderBy('id', 'DESC')->findAll(),
			'penduduk' => $this->kependudukan,
		];
		return view('kependudukan/data-peristiwa/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Data Peristiwa'
		];
		return view('kependudukan/data-peristiwa/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Peristiwa',
			'validation' => $this->validation,
			'penduduk' => $this->kependudukan->findAll(),
			'data_peristiwa' => $this->dataPeristiwa,
		];
		return view('kependudukan/data-peristiwa/new', $data);
	}

	public function create()
	{
		if (!$this->validate($this->dataPeristiwa->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->dataPeristiwa->save($data);
		return redirect()->to(route_to('kependudukan_data_peristiwa'))->with('berhasil', 'Data berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data_peristiwa = $this->dataPeristiwa->find($id);
		$data = [
			'title' => 'Ubah Data Peristiwa',
			'validation' => $this->validation,
			'data_peristiwa' => $data_peristiwa,
			'penduduk' => $this->kependudukan->where('id !=', $data_peristiwa->penduduk_id ?? 1)->findAll(),
			'data_penduduk' =>  $this->kependudukan->where('id', $data_peristiwa->penduduk_id ?? 1)->first(),
		];
		return view('kependudukan/data-peristiwa/edit', $data);
	}

	public function update($id = null)
	{
		if (!$this->validate($this->dataPeristiwa->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->dataPeristiwa->save($data);
		return redirect()->to(route_to('kependudukan_data_peristiwa'))->with('berhasil', 'Data berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->dataPeristiwa->delete($id);
		return redirect()->to(route_to('kependudukan_data_peristiwa'))->with('berhasil', 'Data berhasil dihapus!');
	}
}

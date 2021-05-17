<?php

namespace App\Controllers\DataTerpadu;

use App\Controllers\BaseController;

class IbuHamil extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Ibu Hamil',
			'ibu_hamil' => $this->ibuHamil->orderBy('id', 'DESC')->findAll(),
			'penduduk' => $this->kependudukan,
		];
		return view('data-terpadu/ibu-hamil/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Ibu Hamil'
		];
		return view('data-terpadu/ibu-hamil/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Ibu Hamil',
			'validation' => $this->validation,
			'penduduk' => $this->kependudukan->where('jenis_kelamin', 'Perempuan')->findAll(),
			'ibu_hamil' => $this->ibuHamil,
		];
		return view('data-terpadu/ibu-hamil/new', $data);
	}

	public function create()
	{
		if (!$this->validate($this->ibuHamil->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->ibuHamil->save($data);
		return redirect()->to(route_to('data_terpadu_ibu_hamil'))->with('berhasil', 'Data berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$ibu_hamil = $this->ibuHamil->find($id);
		$data = [
			'title' => 'Ubah Ibu Hamil',
			'validation' => $this->validation,
			'ibu_hamil' => $ibu_hamil,
			'penduduk' => $this->kependudukan->where('id !=', $ibu_hamil->penduduk_id ?? 1)->where('jenis_kelamin', 'Perempuan')->findAll(),
			'data_penduduk' =>  $this->kependudukan->where('id', $ibu_hamil->penduduk_id ?? 1)->first(),
		];
		return view('data-terpadu/ibu-hamil/edit', $data);
	}

	public function update($id = null)
	{
		if (!$this->validate($this->ibuHamil->getValidationRules())) {
			return redirect()->to(route_to('data_terpadu_ibu_hamil_edit', 1))->withInput();
		}
		$data = $this->request->getPost();
		$this->ibuHamil->save($data);
		return redirect()->to(route_to('data_terpadu_ibu_hamil'))->with('berhasil', 'Data berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->ibuHamil->delete($id);
		return redirect()->to(route_to('data_terpadu_ibu_hamil'))->with('berhasil', 'Data berhasil dihapus!');
	}
}

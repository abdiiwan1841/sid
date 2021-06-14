<?php

namespace App\Controllers\Pemerintahan;

use App\Controllers\BaseController;

class TanahWarga extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Tanah Warga',
			'tanah_warga' => $this->tanahWarga->orderBy('id', 'DESC')->findAll(),
			'penduduk' => $this->kependudukan,
		];
		return view('pemerintahan/tanah-warga/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Tanah Warga'
		];
		return view('pemerintahan/tanah-warga/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Tanah Warga',
			'validation' => $this->validation,
			'data' => $this->tanahWarga,
			'penduduk' =>  $this->kependudukan->findAll(),
		];
		return view('pemerintahan/tanah-warga/new', $data);
	}

	public function create()
	{
		if (!$this->validate($this->tanahWarga->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->tanahWarga->save($data);
		return redirect()->to(route_to('pemerintahan_tanah_warga'))->with('berhasil', 'Data berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$tanahWarga = $this->tanahWarga->find($id);
		$data = [
			'title' => 'Ubah Tanah Warga',
			'validation' => $this->validation,
			'data' => $tanahWarga,
			'data_penduduk' =>  $this->kependudukan->where('id', $tanahWarga->penduduk_id ?? 1)->first(),
			'penduduk' =>  $this->kependudukan->where('id !=', $tanahWarga->penduduk_id ?? 1)->findAll(),
		];
		return view('pemerintahan/tanah-warga/edit', $data);
	}

	public function update($id = null)
	{
		$data = $this->request->getPost();
		if (!$this->validate($this->tanahWarga->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$this->tanahWarga->save($data);
		return redirect()->to(route_to('pemerintahan_tanah_warga'))->with('berhasil', 'Data berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->tanahWarga->delete($id);
		return redirect()->to(route_to('pemerintahan_tanah_warga'))->with('berhasil', 'Data berhasil dihapus!');
	}
}

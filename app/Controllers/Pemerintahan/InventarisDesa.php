<?php

namespace App\Controllers\Pemerintahan;

use App\Controllers\BaseController;

class InventarisDesa extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Inventaris Desa',
			'inventaris_desa' => $this->inventarisDesa->orderBy('id', 'DESC')->findAll(),
		];
		return view('pemerintahan/inventaris-desa/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Inventaris Desa'
		];
		return view('pemerintahan/inventaris-desa/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Inventaris Desa',
			'validation' => $this->validation,
			'data' => $this->inventarisDesa,
		];
		return view('pemerintahan/inventaris-desa/new', $data);
	}

	public function create()
	{
		if (!$this->validate($this->inventarisDesa->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$this->inventarisDesa->save($data);
		return redirect()->to(route_to('pemerintahan_inventaris_desa'))->with('berhasil', 'Inventaris Desa berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$inventarisDesa = $this->inventarisDesa->find($id);
		$data = [
			'title' => 'Ubah Inventaris Desa',
			'validation' => $this->validation,
			'data' => $inventarisDesa,
		];
		return view('pemerintahan/inventaris-desa/edit', $data);
	}

	public function update($id = null)
	{
		$data = $this->request->getPost();
		if (!$this->validate($this->inventarisDesa->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$this->inventarisDesa->save($data);
		return redirect()->to(route_to('pemerintahan_inventaris_desa'))->with('berhasil', 'Inventaris Desa berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->inventarisDesa->delete($id);
		return redirect()->to(route_to('pemerintahan_inventaris_desa'))->with('berhasil', 'Inventaris Desa berhasil dihapus!');
	}
}

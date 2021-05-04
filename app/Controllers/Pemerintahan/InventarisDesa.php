<?php

namespace App\Controllers\Pemerintahan;

use App\Controllers\BaseController;

class InventarisDesa extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Inventaris Desa/Kelurahan'
		];
		return view('pemerintahan/inventaris-desa/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Inventaris Desa/Kelurahan'
		];
		return view('pemerintahan/inventaris-desa/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Inventaris Desa/Kelurahan',
			'validation' => $this->validation,
		];
		return view('pemerintahan/inventaris-desa/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->inventarisDesa->getValidationRules())) {
		// 	return redirect()->to(route_to('pemerintahan_inventaris_desa'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->inventarisDesa->save($data);
		return redirect()->to(route_to('pemerintahan_inventaris_desa'))->with('berhasil', 'Inventaris Desa/Kelurahan berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Inventaris Desa/Kelurahan',
			'validation' => $this->validation,
			// 'dokumen' => $this->inventarisDesa->find($id),
		];
		return view('pemerintahan/inventaris-desa/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->inventarisDesa->getValidationRules())) {
		// 	return redirect()->to(route_to('pemerintahan_inventaris_desa',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->inventarisDesa->save($data);
		return redirect()->to(route_to('pemerintahan_inventaris_desa'))->with('berhasil', 'Inventaris Desa/Kelurahan berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->inventarisDesa->delete($id);
		return redirect()->to(route_to('pemerintahan_inventaris_desa'))->with('berhasil', 'Inventaris Desa/Kelurahan berhasil dihapus!');
	}
}


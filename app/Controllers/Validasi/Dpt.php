<?php

namespace App\Controllers\Validasi;

use App\Controllers\BaseController;

class Dpt extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Data DPT'
		];
		return view('validasi/dpt/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Data DPT'
		];
		return view('validasi/dpt/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data DPT',
			'validation' => $this->validation,
		];
		return view('validasi/dpt/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->dpt->getValidationRules())) {
		// 	return redirect()->to(route_to('validasi_dpt_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->dpt->save($data);
		return redirect()->to(route_to('validasi_dpt'))->with('berhasil', 'Data DPT berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Data DPT',
			'validation' => $this->validation,
			// 'dokumen' => $this->dpt->find($id),
		];
		return view('validasi/dpt/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->dpt->getValidationRules())) {
		// 	return redirect()->to(route_to('validasi_dpt_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->dpt->save($data);
		return redirect()->to(route_to('validasi_dpt'))->with('berhasil', 'Data DPT berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->dpt->delete($id);
		return redirect()->to(route_to('validasi_dpt'))->with('berhasil', 'Data DPT berhasil dihapus!');
	}
}



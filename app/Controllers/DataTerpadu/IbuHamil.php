<?php

namespace App\Controllers\DataTerpadu;

use App\Controllers\BaseController;

class IbuHamil extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Ibu Hamil'
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
			'title' => 'Tambah Ibu Hamil',
			'validation' => $this->validation,
		];
		return view('data-terpadu/ibu-hamil/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->ibuHamil->getValidationRules())) {
		// 	return redirect()->to(route_to('data_terpadu_ibu_hamil_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->ibuHamil->save($data);
		return redirect()->to(route_to('data_terpadu_ibu_hamil'))->with('berhasil', 'Ibu Hamil berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Ibu Hamil',
			'validation' => $this->validation,
			// 'dokumen' => $this->ibuHamil->find($id),
		];
		return view('data-terpadu/ibu-hamil/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->ibuHamil->getValidationRules())) {
		// 	return redirect()->to(route_to('data_terpadu_ibu_hamil_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->ibuHamil->save($data);
		return redirect()->to(route_to('data_terpadu_ibu_hamil'))->with('berhasil', 'Ibu Hamil berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->ibuHamil->delete($id);
		return redirect()->to(route_to('data_terpadu_ibu_hamil'))->with('berhasil', 'Ibu Hamil berhasil dihapus!');
	}
}

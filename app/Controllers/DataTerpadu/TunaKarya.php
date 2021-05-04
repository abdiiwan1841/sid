<?php

namespace App\Controllers\DataTerpadu;

use App\Controllers\BaseController;

class TunaKarya extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Tuna Karya'
		];
		return view('data-terpadu/tuna-karya/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Tuna Karya'
		];
		return view('data-terpadu/tuna-karya/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Tuna Karya',
			'validation' => $this->validation,
		];
		return view('data-terpadu/tuna-karya/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->tunaKarya->getValidationRules())) {
		// 	return redirect()->to(route_to('data_terpadu_tuna_karya_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->tunaKarya->save($data);
		return redirect()->to(route_to('data_terpadu_tuna_karya'))->with('berhasil', 'Tuna Karya berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Tuna Karya',
			'validation' => $this->validation,
			// 'dokumen' => $this->tunaKarya->find($id),
		];
		return view('data-terpadu/tuna-karya/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->tunaKarya->getValidationRules())) {
		// 	return redirect()->to(route_to('data_terpadu_tuna_karya_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->tunaKarya->save($data);
		return redirect()->to(route_to('data_terpadu_tuna_karya'))->with('berhasil', 'Tuna Karya berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->tunaKarya->delete($id);
		return redirect()->to(route_to('data_terpadu_tuna_karya'))->with('berhasil', 'Tuna Karya berhasil dihapus!');
	}
}

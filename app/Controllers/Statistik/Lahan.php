<?php

namespace App\Controllers\Statistik;

use App\Controllers\BaseController;

class Lahan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Statistik Lahan'
		];
		return view('statistik/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Statistik Lahan'
		];
		return view('statistik/show', $data);
	}

	public function new()
	{
		return json_encode(
			[
				'name' => 'Luas Lahan (m2)',
				'data' => [
					[
						"x" => 2015,
						"y" => 334
					],
					[
						"x" => 2016,
						"y" => 304
					],
					[
						"x" => 2017,
						"y" => null
					],
				],

			]
		);
	}

	public function create()
	{
		// if (!$this->validate($this->statistikLahan->getValidationRules())) {
		// 	return redirect()->to(route_to('statistik_lahan_new'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->statistikLahan->save($data);
		return redirect()->to(route_to('statistik_lahan'))->with('berhasil', 'Statistik Lahan berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Statistik Lahan',
			'validation' => $this->validation,
			// 'dokumen' => $this->statistikLahan->find($id),
		];
		return view('statistik/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->statistikLahan->getValidationRules())) {
		// 	return redirect()->to(route_to('statistik_lahan_edit',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->statistikLahan->save($data);
		return redirect()->to(route_to('statistik_lahan'))->with('berhasil', 'Statistik Lahan berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->statistikLahan->delete($id);
		return redirect()->to(route_to('statistik_lahan'))->with('berhasil', 'Statistik Lahan berhasil dihapus!');
	}
}

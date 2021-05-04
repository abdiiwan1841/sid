<?php

namespace App\Controllers\DataApbd\LaporanRealisasi;

use App\Controllers\BaseController;

class Belanja extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Laporan Realisasi - Belanja'
		];
		return view('data-apbd/laporan-realisasi/belanja/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Laporan Realisasi - Belanja'
		];
		return view('data-apbd/laporan-realisasi/belanja/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Laporan Realisasi - Belanja',
			'validation' => $this->validation,
		];
		return view('data-apbd/laporan-realisasi/belanja/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->laporanRealisasiBelanja->getValidationRules())) {
		// 	return redirect()->to(route_to('laporan_realisasi_belanja'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->laporanRealisasiBelanja->save($data);
		return redirect()->to(route_to('laporan_realisasi_belanja'))->with('berhasil', 'Laporan Realisasi - Belanja berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Laporan Realisasi - Belanja',
			'validation' => $this->validation,
			// 'dokumen' => $this->laporanRealisasiBelanja->find($id),
		];
		return view('data-apbd/laporan-realisasi/belanja/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->laporanRealisasiBelanja->getValidationRules())) {
		// 	return redirect()->to(route_to('laporan_realisasi_belanja',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->laporanRealisasiBelanja->save($data);
		return redirect()->to(route_to('laporan_realisasi_belanja'))->with('berhasil', 'Laporan Realisasi - Belanja berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->laporanRealisasiBelanja->delete($id);
		return redirect()->to(route_to('laporan_realisasi_belanja'))->with('berhasil', 'Laporan Realisasi - Belanja berhasil dihapus!');
	}
}


<?php

namespace App\Controllers\DataApbd\LaporanRealisasi;

use App\Controllers\BaseController;

class Pembiayaan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Laporan Realisasi - Belanja'
		];
		return view('data-apbd/laporan-realisasi/pembiayaan/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Laporan Realisasi - Belanja'
		];
		return view('data-apbd/laporan-realisasi/pembiayaan/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Laporan Realisasi - Belanja',
			'validation' => $this->validation,
		];
		return view('data-apbd/laporan-realisasi/pembiayaan/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->laporanRealisasiPembiayaan->getValidationRules())) {
		// 	return redirect()->to(route_to('laporan_realisasi_pembiayaan'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->laporanRealisasiPembiayaan->save($data);
		return redirect()->to(route_to('laporan_realisasi_pembiayaan'))->with('berhasil', 'Laporan Realisasi - Belanja berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Laporan Realisasi - Belanja',
			'validation' => $this->validation,
			// 'dokumen' => $this->laporanRealisasiPembiayaan->find($id),
		];
		return view('data-apbd/laporan-realisasi/pembiayaan/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->laporanRealisasiPembiayaan->getValidationRules())) {
		// 	return redirect()->to(route_to('laporan_realisasi_pembiayaan',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->laporanRealisasiPembiayaan->save($data);
		return redirect()->to(route_to('laporan_realisasi_pembiayaan'))->with('berhasil', 'Laporan Realisasi - Belanja berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->laporanRealisasiPembiayaan->delete($id);
		return redirect()->to(route_to('laporan_realisasi_pembiayaan'))->with('berhasil', 'Laporan Realisasi - Pembiayaan berhasil dihapus!');
	}
}

<?php

namespace App\Controllers\DataApbd\LaporanRealisasi;

use App\Controllers\BaseController;

class Pendapatan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Laporan Realisasi - Pendapatan'
		];
		return view('data-apbd/laporan-realisasi/index', $data);
	}
	
	public function show($id = null)
	{
		$data = [
			'title' => 'Laporan Realisasi - Pendapatan'
		];
		return view('data-apbd/laporan-realisasi/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Laporan Realisasi - Pendapatan',
			'validation' => $this->validation,
		];
		return view('data-apbd/laporan-realisasi/new', $data);
	}

	public function create()
	{
		// if (!$this->validate($this->laporanRealisasiPendapatan->getValidationRules())) {
		// 	return redirect()->to(route_to('laporan_realisasi_pendapatan'))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->laporanRealisasiPendapatan->save($data);
		return redirect()->to(route_to('laporan_realisasi_pendapatan'))->with('berhasil', 'Laporan Realisasi - Pendapatan berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'Ubah Laporan Realisasi - Pendapatan',
			'validation' => $this->validation,
			// 'dokumen' => $this->laporanRealisasiPendapatan->find($id),
		];
		return view('data-apbd/laporan-realisasi/edit', $data);
	}

	public function update($id = null)
	{
		// if (!$this->validate($this->laporanRealisasiPendapatan->getValidationRules())) {
		// 	return redirect()->to(route_to('laporan_realisasi_pendapatan',1))->withInput();
		// }
		// $data = $this->request->getPost();
		// $this->laporanRealisasiPendapatan->save($data);
		return redirect()->to(route_to('laporan_realisasi_pendapatan'))->with('berhasil', 'Laporan Realisasi - Pendapatan berhasil diubah!');
	}

	public function delete($id = null)
	{
		// $this->laporanRealisasiPendapatan->delete($id);
		return redirect()->to(route_to('laporan_realisasi_pendapatan'))->with('berhasil', 'Laporan Realisasi - Pendapatan berhasil dihapus!');
	}
}

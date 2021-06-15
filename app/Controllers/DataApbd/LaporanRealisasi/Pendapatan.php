<?php

namespace App\Controllers\DataApbd\LaporanRealisasi;

use App\Controllers\BaseController;

class Pendapatan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'laporan realisasi Pendapatan',
			'pendapatan' => $this->laporanRealisasiPendapatan->orderBy('id', 'DESC')->findAll(),
			'pendapatan_model' => $this->pendapatan,
		];
		return view('data-apbd/laporan-realisasi/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'pendapatan'
		];
		return view('data-apbd/laporan-realisasi/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data laporan realisasi pendapatan',
			'validation' => $this->validation,
			'data' => $this->laporanRealisasiPendapatan,
		];
		return view('data-apbd/laporan-realisasi/new', $data);
	}

	public function create()
	{
		$data = $this->request->getPost();
		$this->laporanRealisasiPendapatan->save($data);
		return redirect()->to(route_to('laporan_realisasi_pendapatan'))->with('berhasil', 'Data berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$pendapatan = $this->laporanRealisasiPendapatan->find($id);
		$data = [
			'title' => 'Ubah data laporan realisasi pendapatan',
			'validation' => $this->validation,
			'data' => $pendapatan,
		];
		return view('data-apbd/laporan-realisasi/edit', $data);
	}

	public function update($id = null)
	{
		$data = $this->request->getPost();
		$this->laporanRealisasiPendapatan->save($data);
		return redirect()->to(route_to('laporan_realisasi_pendapatan'))->with('berhasil', 'Data berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->laporanRealisasiPendapatan->delete($id);
		return redirect()->to(route_to('laporan_realisasi_pendapatan'))->with('berhasil', 'Data berhasil dihapus!');
	}
}

<?php

namespace App\Controllers\DataApbd\LaporanRealisasi;

use App\Controllers\BaseController;

class Pembiayaan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Laporan Realisasi Pembiayaan',
			'pembiayaan' => $this->laporanRealisasiPembiayaan->orderBy('id', 'DESC')->findAll(),
			'pembiayaan_model' => $this->laporanRealisasiPembiayaan,
		];
		return view('data-apbd/laporan-realisasi/pembiayaan/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'pembiayaan'
		];
		return view('data-apbd/laporan-realisasi/pembiayaan/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Laporan Realisasi Pembiayaan',
			'validation' => $this->validation,
			'data' => $this->laporanRealisasiPembiayaan,
		];
		return view('data-apbd/laporan-realisasi/pembiayaan/new', $data);
	}

	public function create()
	{
		$data = $this->request->getPost();
		$this->laporanRealisasiPembiayaan->save($data);
		return redirect()->to(route_to('data_apbd_pembiayaan'))->with('berhasil', 'Data berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$pembiayaan = $this->laporanRealisasiPembiayaan->find($id);
		$data = [
			'title' => 'Ubah data Laporan Realisasi Pembiayaan',
			'validation' => $this->validation,
			'data' => $pembiayaan,
		];
		return view('data-apbd/laporan-realisasi/pembiayaan/edit', $data);
	}

	public function update($id = null)
	{

		$data = $this->request->getPost();
		$this->laporanRealisasiPembiayaan->save($data);
		return redirect()->to(route_to('data_apbd_pembiayaan'))->with('berhasil', 'Data berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->laporanRealisasiPembiayaan->delete($id);
		return redirect()->to(route_to('data_apbd_pembiayaan'))->with('berhasil', 'Data berhasil dihapus!');
	}
}

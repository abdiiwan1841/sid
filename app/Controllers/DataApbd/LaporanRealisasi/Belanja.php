<?php

namespace App\Controllers\DataApbd\LaporanRealisasi;

use App\Controllers\BaseController;

class Belanja extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Laporan Realisasi Belanja',
			'belanja' => $this->laporanRealisasiBelanja->orderBy('id', 'DESC')->findAll(),
			'belanja_model' => $this->laporanRealisasiBelanja,
		];
		return view('data-apbd/laporan-realisasi/belanja/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'belanja'
		];
		return view('data-apbd/laporan-realisasi/belanja/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Laporan Realisasi Belanja',
			'validation' => $this->validation,
			'data' => $this->laporanRealisasiBelanja,
		];
		return view('data-apbd/laporan-realisasi/belanja/new', $data);
	}

	public function create()
	{
		$data = $this->request->getPost();
		$this->laporanRealisasiBelanja->save($data);
		return redirect()->to(route_to('laporan_realisasi_belanja'))->with('berhasil', 'Data berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$belanja = $this->laporanRealisasiBelanja->find($id);
		$data = [
			'title' => 'Ubah data Laporan Realisasi Belanja',
			'validation' => $this->validation,
			'data' => $belanja,
		];
		return view('data-apbd/laporan-realisasi/belanja/edit', $data);
	}

	public function update($id = null)
	{
		$data = $this->request->getPost();
		$this->laporanRealisasiBelanja->save($data);
		return redirect()->to(route_to('laporan_realisasi_belanja'))->with('berhasil', 'Data berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->laporanRealisasiBelanja->delete($id);
		return redirect()->to(route_to('laporan_realisasi_belanja'))->with('berhasil', 'Data berhasil dihapus!');
	}
}

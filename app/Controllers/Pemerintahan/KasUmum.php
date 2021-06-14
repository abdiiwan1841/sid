<?php

namespace App\Controllers\Pemerintahan;

use App\Controllers\BaseController;

class KasUmum extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Kas Umum',
			'kas_umum' => $this->kasUmum->orderBy('id', 'DESC')->findAll(),
			'kas' => $this->kasUmum,
			'penduduk' => $this->kependudukan,
		];
		return view('pemerintahan/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Kas Umum'
		];
		return view('pemerintahan/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Kas Umum',
			'validation' => $this->validation,
			'penduduk' => $this->kependudukan->findAll(),
			'data' => $this->kasUmum,
		];
		return view('pemerintahan/new', $data);
	}

	public function create()
	{
		$data = $this->request->getPost();
		if ($data['type_kas'] == 'pengeluaran') {
			$this->kasUmum->setValidationRules([
				'jumlah_pengeluaran' => 'required'
			]);
			$data['jumlah_pengiriman'] = 0;
		}
		if ($data['type_kas'] == 'pengiriman') {
			$this->kasUmum->setValidationRules([
				'jumlah_pengiriman' => 'required'
			]);
			$data['jumlah_pengeluaran'] = 0;
			$data['total_saldo'] = $data['jumlah_pengiriman'];
		}
		if (!$this->validate($this->kasUmum->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$this->kasUmum->save($data);
		return redirect()->to(route_to('pemerintahan_kas_umum'))->with('berhasil', 'Kas berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$kas_umum = $this->kasUmum->find($id);
		$data = [
			'title' => 'Ubah Kas Umum',
			'validation' => $this->validation,
			'data' => $kas_umum,
		];
		return view('pemerintahan/edit', $data);
	}

	public function update($id = null)
	{
	 	$data = $this->request->getPost();
		if ($data['type_kas'] == 'pengeluaran') {
			$this->kasUmum->setValidationRules([
				'jumlah_pengeluaran' => 'required'
			]);
			$data['jumlah_pengiriman'] = 0;
		}
		if ($data['type_kas'] == 'pengiriman') {
			$this->kasUmum->setValidationRules([
				'jumlah_pengiriman' => 'required'
			]);
			$data['jumlah_pengeluaran'] = 0;
		  $data['total_saldo'] = $data['jumlah_pengiriman'];
		} 
		if (!$this->validate($this->kasUmum->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$this->kasUmum->save($data);
		return redirect()->to(route_to('pemerintahan_kas_umum'))->with('berhasil', 'Kas berhasil diubah!');
	}

	public function delete($id = null)
	{
		$this->kasUmum->delete($id);
		return redirect()->to(route_to('pemerintahan_kas_umum'))->with('berhasil', 'Kas berhasil dihapus!');
	}
}

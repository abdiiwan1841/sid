<?php

namespace App\Controllers\Kependudukan;

use App\Controllers\BaseController;

class DokumenKependudukan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Dokumen Kependudukan',
			'dokumen_kependudukan' => $this->dokumenKependudukan->orderBy('id', 'DESC')->findAll(),
			'penduduk' => $this->kependudukan,
		];
		return view('kependudukan/dokumen-kependudukan/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Dokumen Kependudukan'
		];
		return view('kependudukan/dokumen-kependudukan/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Dokumen Kependudukan',
			'validation' => $this->validation,
			'penduduk' => $this->kependudukan->findAll(),
			'dokumen_kependudukan' => $this->dokumenKependudukan,
		];
		return view('kependudukan/dokumen-kependudukan/new', $data);
	}

	public function create()
	{
		if (!$this->validate($this->dokumenKependudukan->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$fotokopi_ktp = $this->request->getFile('fotokopi_ktp');
		$fotokopi_ijazah = $this->request->getFile('fotokopi_ijazah');
		if ($fotokopi_ktp->getError() !== 4 && $fotokopi_ijazah->getError() !== 4) {
			$data['fotokopi_ktp'] = $fotokopi_ktp->getName();
			$data['fotokopi_ijazah'] = $fotokopi_ijazah->getName();
			$this->dokumenKependudukan->save($data);
			$fotokopi_ktp->move('img/ktp');
			$fotokopi_ijazah->move('img/ijazah');
		} else {
			$this->dokumenKependudukan->save($data);
		}
		return redirect()->to(route_to('kependudukan_dokumen_kependudukan'))->with('berhasil', 'Data berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$dokumen_kependudukan = $this->dokumenKependudukan->find($id);
		$data = [
			'title' => 'Ubah Dokumen Kependudukan',
			'validation' => $this->validation,
			'dokumen_kependudukan' => $dokumen_kependudukan,
			'penduduk' => $this->kependudukan->where('id !=', $dokumen_kependudukan->penduduk_id ?? 1)->findAll(),
			'data_penduduk' =>  $this->kependudukan->where('id', $dokumen_kependudukan->penduduk_id ?? 1)->first(),
		];
		return view('kependudukan/dokumen-kependudukan/edit', $data);
	}

	public function update($id = null)
	{
		$this->dokumenKependudukan->setValidationRules([
			'fotokopi_ktp' => 'is_image[fotokopi_ktp]|mime_in[fotokopi_ktp,image/png,image/jpg,image/jpeg]|max_size[fotokopi_ktp,3000]',
			'fotokopi_ijazah' => 'is_image[fotokopi_ijazah]|max_size[fotokopi_ijazah,3000]',
		]);
		if (!$this->validate($this->dokumenKependudukan->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$fotokopi_ktp = $this->request->getFile('fotokopi_ktp');
		$fotokopi_ijazah = $this->request->getFile('fotokopi_ijazah');
		$data = $this->request->getPost();
		if ($fotokopi_ktp->getError() !== 4) {
			if (file_exists('img/ktp/' . $data['fotokopi_ktpLama'])) {
				unlink("img/ktp/{$data['fotokopi_ktpLama']}");
			}
			$fotokopi_ktp->move('img/ktp', $fotokopi_ktp->getRandomName());
			$data['fotokopi_ktp'] = $fotokopi_ktp->getName();
		}
		if ($fotokopi_ijazah->getError() !== 4) {
			if (file_exists('img/ijazah/' . $data['fotokopi_ijazahLama'])) {
				unlink("img/ijazah/{$data['fotokopi_ijazahLama']}");
			}
			$fotokopi_ijazah->move('img/ijazah', $fotokopi_ijazah->getRandomName());
			$data['fotokopi_ijazah'] = $fotokopi_ijazah->getName();
		}
		$this->dokumenKependudukan->save($data);
		return redirect()->to(route_to('kependudukan_dokumen_kependudukan'))->with('berhasil', 'Data berhasil diubah!');
	}

	public function delete($id = null)
	{
		$data = $this->dokumenKependudukan->find($id);
		if (file_exists('img/ktp/' . $data->fotokopi_ktp)) unlink("img/ktp/{$data->fotokopi_ktp}");
		if (file_exists('img/ijazah/' . $data->fotokopi_ijazah)) unlink("img/ijazah/{$data->fotokopi_ijazah}");
		$this->dokumenKependudukan->delete($id);
		return redirect()->to(route_to('kependudukan_dokumen_kependudukan'))->with('berhasil', 'Data berhasil dihapus!');
	}
}

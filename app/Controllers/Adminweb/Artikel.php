<?php

namespace App\Controllers\Adminweb;

use App\Controllers\BaseController;

class Artikel extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'artikel',
			'artikel' => $this->artikel->orderBy('id', 'DESC')->findAll(),
		];
		return view('admin-web/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'artikel'
		];
		return view('admin-web/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data artikel',
			'validation' => $this->validation,
			'artikel' => $this->artikel,
		];
		return view('admin-web/new', $data);
	}

	public function create()
	{
		if (!$this->validate($this->artikel->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$data['slug'] = url_title($data['judul']);
		$thumbnail = $this->request->getFile('thumbnail');
		if ($thumbnail->getError() !== 4) {
			$data['thumbnail'] = $thumbnail->getName();
			$this->artikel->save($data);
			$thumbnail->move('img/artikel');
		} else {
			$this->artikel->save($data);
		}
		return redirect()->to(route_to('artikel'))->with('berhasil', 'Artikel berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$artikel = $this->artikel->find($id);
		$data = [
			'title' => 'Ubah artikel',
			'validation' => $this->validation,
			'artikel' => $artikel,
		];
		return view('admin-web/edit', $data);
	}

	public function update($id = null)
	{
		if (!$this->validate($this->artikel->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$data['slug'] = url_title($data['judul']);
		$thumbnail = $this->request->getFile('thumbnail');
		if ($thumbnail->getError() !== 4) {
			$data['thumbnail'] = $thumbnail->getName();
			if (file_exists('img/artikel/' . $data['thumbnailLama'])) {
				unlink("img/artikel/{$data['thumbnailLama']}");
			}
			$this->artikel->save($data);
			$thumbnail->move('img/artikel');
		} else {
			$this->artikel->save($data);
		}
		return redirect()->to(route_to('artikel'))->with('berhasil', 'Artikel berhasil diubah!');
	}

	public function delete($id = null)
	{
		$data = $this->artikel->find($id);
		if (file_exists('img/artikel/' . $data->thumbnail)) unlink("img/artikel/{$data->thumbnail}");
		$this->artikel->delete($id);
		return redirect()->to(route_to('artikel'))->with('berhasil', 'Artikel berhasil dihapus!');
	}
}

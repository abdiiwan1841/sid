<?php

namespace App\Controllers\Adminweb;

use App\Controllers\BaseController;

class MenuBar extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Menu Bar',
			'menu_bar' => $this->menuBar->orderBy('id', 'DESC')->findAll(),
		];
		return view('admin-web/menu-bar/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Menu Bar'
		];
		return view('admin-web/menu-bar/show', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Tambah Data Menu Bar',
			'validation' => $this->validation,
			'menu_bar' => $this->menuBar,
		];
		return view('admin-web/menu-bar/new', $data);
	}

	public function create()
	{
		if (!$this->validate($this->menuBar->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$data = $this->request->getPost();
		$foto = $this->request->getFile('foto');
		if ($foto->getError() !== 4) {
			$data['foto'] = $foto->getName();
			$this->menuBar->save($data);
			$foto->move('img/menu-bar');
		} else {
			$this->menuBar->save($data);
		}
		return redirect()->to(route_to('admin_web_menu_bar'))->with('berhasil', 'Menu bar berhasil ditambah!');
	}

	public function edit($id = null)
	{
		$menu_bar = $this->menuBar->find($id);
		$data = [
			'title' => 'Ubah Menu bar',
			'validation' => $this->validation,
			'menu_bar' => $menu_bar,
		];
		return view('admin-web/menu-bar/edit', $data);
	}

	public function update($id = null)
	{
		$data = $this->request->getPost();
		if ($data['fotoLama'] != '') {
			$this->menuBar->setValidationRules([
				'foto' => 'is_image[foto]|mime_in[foto,image/png,image/jpg,image/jpeg,image/svg+xml]|ext_in[foto,png,jpg,jpeg,svg]|max_size[foto,3000]'
			]);
		}
		if (!$this->validate($this->menuBar->getValidationRules())) {
			return redirect()->back()->withInput();
		}
		$foto = $this->request->getFile('foto');
		if ($foto->getError() !== 4) {
			$data['foto'] = $foto->getName();
			if (file_exists('img/menu-bar/' . $data['fotoLama'])) {
				unlink("img/menu-bar/{$data['fotoLama']}");
			}
			$this->menuBar->save($data);
			$foto->move('img/menu-bar');
		} else {
			$this->menuBar->save($data);
		}
		return redirect()->to(route_to('admin_web_menu_bar'))->with('berhasil', 'Menu bar berhasil diubah!');
	}

	public function delete($id = null)
	{
		$data = $this->menuBar->find($id);
		if (file_exists('img/menu-bar/' . $data->foto)) unlink("img/menu-bar/{$data->foto}");
		$this->menuBar->delete($id);
		return redirect()->to(route_to('admin_web_menu_bar'))->with('berhasil', 'Menu bar berhasil dihapus!');
	}
}

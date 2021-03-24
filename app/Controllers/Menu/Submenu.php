<?php

namespace App\Controllers\Menu;

use \App\Controllers\BaseController;

class Submenu extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Submenu Management',
      'submenu' => $this->submenu->where('menu_id !=', 1)->where('menu_id !=', 2)->orderBy('id', 'desc')->findAll(),
    ];
    return view('menu/submenu/index', $data);
  }

  public function new()
  {
    $data = [
      'title' => 'Tambah Submenu',
      'validation' => $this->validation,
      'menu' => $this->menu->findAll(),
    ];
    return view('menu/submenu/new', $data);
  }

  public function create()
  {
    if (!$this->validate($this->submenu->getValidationRules())) {
      return redirect()->to('/menu-management/submenu-management/new')->withInput();
    }
    $data = $this->request->getPost();
    $data['is_active'] = $this->request->getPost('is_active');
    $this->submenu->save($data);
    session()->setFlashdata('berhasil', 'Submenu berhasil ditambah!');
    return redirect()->to('/menu-management/submenu-management')->withInput();
  }

  public function edit($id)
  {
    $data = [
      'title' => 'Ubah Menu',
      'validation' => $this->validation,
      'submenu' => $this->submenu->find($id),
      'menu' => $this->menu->findAll(),
    ];
    return view('menu/submenu/edit', $data);
  }
  public function update($id)
  {
    $this->submenu->setValidationRules([
      'url' => "required|is_unique[user_sub_menu.url,id,{$id}]"
    ]);
    if (!$this->validate($this->submenu->getValidationRules())) {
      return redirect()->to('/menu-management/submenu-management/' . $id . '/edit')->withInput();
    }
    $data = $this->request->getPost();
    $data['is_active'] = $this->request->getPost('is_active');
    $this->submenu->save($data);
    session()->setFlashdata('berhasil', 'Submenu berhasil diubah!');
    return redirect()->to('/menu-management/submenu-management')->withInput();
  }

  public function delete($id = null)
  {
    $this->submenu->delete($id);
    session()->setFlashdata('berhasil', 'Submenu berhasil dihapus!');
    return redirect()->to('/menu-management/submenu-management');
  }
}

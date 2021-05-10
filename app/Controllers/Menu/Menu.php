<?php

namespace App\Controllers\Menu;

use \App\Controllers\BaseController;

class Menu extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Menu Management',
      'menu' => $this->menu->where('menu !=', 'menu management')->where('menu !=', 'role management')->orderBy('id', 'desc')->findAll(),
    ];
    return view('menu/index', $data);
  }

  public function new()
  {
    $data = [
      'title' => 'Tambah Menu',
      'validation' => $this->validation,
      'group' => $this->group->findAll()
    ];
    return view('menu/new', $data);
  }

  public function create()
  {
    if (!$this->validate($this->menu->getValidationRules())) {
      return redirect()->to('/menu-management/new')->withInput();
    }
    $data = $this->request->getPost();
    $data['slug'] = strtolower(url_title($this->request->getPost('menu')));
    $this->menu->save($data);
    if (isset($data['group_id'])) {
      $menu_id = $this->menu->where('menu', $data['menu'])->first();
      foreach ($data['group_id'] as $group) {
        $this->userAccessMenuModel->save([
          'group_id' => $group,
          'menu_id' => $menu_id->id
        ]);
      }
    }
    session()->setFlashdata('berhasil', 'Menu berhasil ditambahkan!');
    return redirect()->to('/menu-management')->withInput();
  }

  public function edit($slug)
  {
    $menu = $this->menu->findOrFail($slug);
    $data = [
      'title' => 'Ubah Menu',
      'validation' => $this->validation,
      'menu' => $menu,
      'role' => $this->db->table('auth_groups')->select('*')
        ->join('user_access_menu', 'user_access_menu.group_id = auth_groups.id')
        ->where('user_access_menu.menu_id', $menu->id)->get()->getResultObject(),
      'group' => $this->group->findAll(),
    ];
    return view('menu/edit', $data);
  }

  public function update()
  {
    if (!$this->validate($this->menu->getValidationRules())) {
      return redirect()->back()->withInput();
    }
    $data = $this->request->getPost();
    $data['id'] = $this->request->getPost('id');
    $this->menu->setValidationRules([
      'menu' => "required|is_unique[user_menu.menu,id,{$data['id']}]"
    ]);
    $data['slug'] = strtolower(url_title($this->request->getPost('menu')));
    $this->menu->save($data);
    // if (isset($data['group_id'])) {
    //   $menu_id = $this->menu->where('menu', $data['menu'])->first();
    //   foreach ($data['group_id'] as $group_id) {
    //     $accessMenu = $this->userAccessMenuModel->where([
    //       'group_id' => $group_id,
    //       'menu_id' => $menu_id->id
    //     ])->first();
    //     if ($accessMenu) {
    //       if (!$accessMenu) {
    //         $this->userAccessMenuModel->save([
    //           'group_id' => $group_id,
    //           'menu_id' => $menu_id->id
    //         ]);
    //       }
    //     } else {
    //       if ($accessMenu) {
    //         $this->userAccessMenuModel->delete($accessMenu->id);
    //       }
    //     }
    //   }
    // }
    session()->setFlashdata('berhasil', 'Menu berhasil diubah!');
    return redirect()->to('/menu-management');
  }

  public function delete($id = null)
  {
    $this->menu->delete($id);
    session()->setFlashdata('berhasil', 'Menu berhasil dihapus!');
    return redirect()->to('/menu-management');
  }
}

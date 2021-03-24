<?php

namespace App\Controllers\Role;

use \App\Controllers\BaseController;

class Role extends BaseController
{
  public function index()
  {
    $currentPage = $this->request->getVar('page_users') ? $this->request->getVar('page_users') : 1;
    $data = [
      'title' => 'Menu Management',
      'menu' => $this->menuModel->paginate(4, 'menu'),
      'pager' => $this->menuModel->pager,
      'currentPage' => $currentPage
    ];
    return view('menu/index', $data);
  }

  // public function add()
  // {
  //   $data = [
  //     'title' => 'Tambah Menu',
  //     'validation' => $this->validation
  //   ];
  //   return view('menu/add', $data);
  // }

  // public function store()
  // {
  //   if (!$this->validate($this->menuModel->getValidationRules())) {
  //     return redirect()->to('/menu/add')->withInput();
  //   }
  //   $data = $this->request->getPost();
  //   $data['slug'] = url_title($this->request->getPost('menu'));
  //   $this->menuModel->save($data);
  //   return redirect()->to('/menu')->withInput();
  // }
}

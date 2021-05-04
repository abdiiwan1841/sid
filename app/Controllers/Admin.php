<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Menu Management',
			'menu' => $this->menu->where('menu !=', 'menu management')->where('menu !=', 'role management')->orderBy('id', 'desc')->findAll(),
		];
		return view('menu/index', $data);
	}
}

<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'users' => $this->user->getUsers(),
			'supervisor' => $this->user->getGroupUsers(2),
			'operator' => $this->user->getGroupUsers(3),
			'keluarga' => $this->user->getGroupUsers(3),
			'penduduk' => $this->user->getGroupUsers(3),
		];
		return view('admin/index', $data);
	}
}

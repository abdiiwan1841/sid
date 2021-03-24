<?php

namespace App\Controllers;

class Supervisor extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Dashboard',
		];

		return view('supervisor/index', $data);
	}
}

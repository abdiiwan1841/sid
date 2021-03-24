<?php

namespace App\Controllers;

class Operator extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Dashboard',
		];

		return view('operator/index', $data);
	}
}

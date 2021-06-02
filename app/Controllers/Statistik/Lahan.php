<?php

namespace App\Controllers\Statistik;

use App\Controllers\BaseController;

class Lahan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Statistik Lahan'
		];
		return view('statistik/index', $data);
	}

	public function show($id = null)
	{
		$data = [
			'title' => 'Statistik Lahan'
		];
		return view('statistik/show', $data);
	}

	public function new()
	{
		return json_encode(
			[
				'name' => 'Luas Lahan (m2)',
				'data' => [
					[
						"x" => 2015,
						"y" => 334
					],
					[
						"x" => 2016,
						"y" => 304
					],
					[
						"x" => 2017,
						"y" => null
					],
				],

			]
		);
	}
}

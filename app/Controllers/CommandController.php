<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CommandController extends BaseController
{
	public function index()
	{
		$this->db->table('user_sub_menu')->whereIn('title', [
			'Inventaris',
			'Statistik Sarana & Prasarana',
			'Statistik Lahan',
			'Statistik Pendidikan',
		])->update(['is_active' => 0]);
		return command('migrate');
	}
	public function rollback()
	{
		return command('migrate:rollback');
	}
}

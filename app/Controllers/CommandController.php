<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CommandController extends BaseController
{
	public function index()
	{
		echo command('migrate');
	}
	public function rollback()
	{
		echo command('migrate:rollback');
	}
}
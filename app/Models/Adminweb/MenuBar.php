<?php

namespace App\Models\Adminweb;

use CodeIgniter\Model;

class MenuBar extends Model
{
	protected $table                = 'menu_bar';
	protected $returnType           = 'object';
	protected $allowedFields        = ['nama', 'foto', 'url', 'is_active'];
	protected $useTimestamps        = false;
	protected $validationRules      = [
		'foto' => 'is_image[foto]|mime_in[foto,image/png,image/jpg,image/jpeg]|ext_in[foto,png,jpg,jpeg]',
		'nama' => 'required',
		'url' => 'required',
	];
	protected $validationMessages   = [];
}

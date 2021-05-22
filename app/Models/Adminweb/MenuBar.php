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
		'foto' => 'uploaded[foto]|is_image[foto]|mime_in[foto,image/png,image/jpg,image/jpeg,image/svg+xml]|ext_in[foto,png,jpg,jpeg,svg]|max_size[foto,3000]',
		'nama' => 'required',
		'url' => 'required',
	];
	protected $validationMessages   = [];
}

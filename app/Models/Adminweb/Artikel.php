<?php

namespace App\Models\Adminweb;

use CodeIgniter\Model;

class Artikel extends Model
{
	protected $table                = 'artikel';
	protected $returnType           = 'object';
	protected $allowedFields        = ['judul', 'slug', 'thumbnail', 'text'];
	protected $useTimestamps        = true;
	protected $validationRules      = [
		'thumbnail' => 'is_image[thumbnail]|mime_in[thumbnail,image/png,image/jpg,image/jpeg]|ext_in[thumbnail,png,jpg,jpeg]',
		'judul' => 'required',
		'text' => 'required',
	];
	protected $validationMessages   = [];
}

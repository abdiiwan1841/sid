<?php

namespace App\Models\DataTerpadu;

use CodeIgniter\Model;

class Difabilitas extends Model
{
	protected $table										= 'difabilitas';
	protected $returnType           = 'object';
	protected $allowedFields        = ['penduduk_id', 'penyandang_difabilitas', 'keterangan'];
	protected $useTimestamps        = true;
	// Validation
	protected $validationRules      = [
		'penduduk_id' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Penduduk harus diisi.'
			]
		]
	];
}

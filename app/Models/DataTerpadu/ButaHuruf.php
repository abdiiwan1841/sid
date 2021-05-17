<?php

namespace App\Models\DataTerpadu;

use CodeIgniter\Model;

class ButaHuruf extends Model
{
	protected $table                = 'buta_huruf';
	protected $returnType           = 'object';
	protected $allowedFields        = ['penduduk_id', 'pernah_sekolah'];
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

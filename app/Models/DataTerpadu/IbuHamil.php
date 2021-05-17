<?php

namespace App\Models\DataTerpadu;

use CodeIgniter\Model;

class IbuHamil extends Model
{
	protected $table                = 'ibu_hamil';
	protected $returnType           = 'object';
	protected $allowedFields        = ['penduduk_id', 'usia_kehamilan'];
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

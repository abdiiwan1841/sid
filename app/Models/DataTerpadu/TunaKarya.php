<?php

namespace App\Models\DataTerpadu;

use CodeIgniter\Model;

class TunaKarya extends Model
{
	protected $table                = 'tuna_karya';
	protected $primaryKey           = 'id';
	protected $returnType						= 'object';
	protected $allowedFields        = ['penduduk_id', 'alasan_menganggur'];
	protected $useTimestamps        = true;
	// Validation
	protected $validationRules      = [
		'penduduk_id' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Penduduk harus diisi.'
			]
		],
		// 'alasan_menganggur' => [
		// 	'rules' => 'required',
		// 	'errors' => [
		// 		'required' => 'Alasan harus diisi.'
		// 	]
		// ],
	];
}

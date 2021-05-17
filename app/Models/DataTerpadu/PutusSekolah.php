<?php

namespace App\Models\DataTerpadu;

use CodeIgniter\Model;

class PutusSekolah extends Model
{
	protected $table                = 'putus_sekolah';
	protected $primaryKey           = 'id';
	protected $returnType						= 'object';
	protected $allowedFields        = ['penduduk_id', 'alasan_putus_sekolah'];
	protected $useTimestamps        = true;
	// Validation
	protected $validationRules      = [
		'penduduk_id' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Penduduk harus diisi.'
			]
		],
		// 'alasan_putus_sekolah' => [
		// 	'rules' => 'required',
		// 	'errors' => [
		// 		'required' => 'Alasan harus diisi.'
		// 	]
		// ],
	];
}

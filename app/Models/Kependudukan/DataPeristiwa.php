<?php

namespace App\Models\Kependudukan;

use CodeIgniter\Model;

class DataPeristiwa extends Model
{
	protected $table                = 'data_peristiwa';
	protected $returnType           = 'object';
	protected $allowedFields        = ['penduduk_id', 'keterangan_peristiwa', 'tanggal_peristiwa'];

	// Validation
	protected $validationRules      = [
		'penduduk_id' => [
			'rules'  => 'required',
			'errors' => [
				'required' => 'Penduduk harus diisi',
			],
		],
		'keterangan_peristiwa' => [
			'rules'  => 'required',
			'errors' => [
				'required' => 'Keterangan harus diisi',
			],
		],
		'tanggal_peristiwa' => [
			'rules'  => 'required',
			'errors' => [
				'required' => 'Tanggal peristiwa harus diisi',
			],
		],
	];
}

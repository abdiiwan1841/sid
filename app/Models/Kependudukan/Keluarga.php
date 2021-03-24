<?php

namespace App\Models\Kependudukan;

use CodeIgniter\Model;

class Keluarga extends Model
{
	protected $table                = 'keluarga';
	protected $primaryKey           = 'id';
	protected $returnType           = 'object';
	protected $useTimestamps 				= true;
	protected $allowedFields        = [
		'no_kk',
		'desa',
		'kecamatan',
		'kabupaten',
		'kode_pos',
		'provinsi',
		'alamat',
		'rt',
		'rw',
	];
	// Validation
	protected $validationRules = [
		'no_kk' => [
			'rules'  => 'required|integer',
			'errors' => [
				'required' => 'Nomor KK harus diisi',
				'integer' => 'Nomor KK harus berupa angka',
			],
		],
		'kecamatan' => 'required',
		'kabupaten' => 'required',
		'kode_pos' => [
			'rules'  => 'required|integer',
			'errors' => [
				'required' => 'Kode Pos harus diisi',
				'integer' => 'Kode Pos harus berupa angka',
			],
		],
		'provinsi' => 'required',
		'alamat' => 'required',
	];
}

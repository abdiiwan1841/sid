<?php

namespace App\Models\Pemerintahan;

use CodeIgniter\Model;

class TanahWarga extends Model
{
	protected $table                = 'tanah_warga';
	protected $returnType           = 'object';
	protected $useTimestamps				= true;
	protected $allowedFields        = ['penduduk_id', 'luas_tanah', 'no_sertifikat'];

	protected $validationRules      = [
		'penduduk_id' => [
			'rules'  => 'required',
			'errors' => [
				'required' => 'Penduduk harus diisi.',
			],
		],
		'luas_tanah' => [
			'rules'  => 'required',
			'errors' => [
				'required' => 'Luas tanah harus diisi.',
			],
		],
		'no_sertifikat' => [
			'rules'  => 'required',
			'errors' => [
				'required' => 'Nomor Sertifikat tanah harus diisi.',
			],
		],
	];
}

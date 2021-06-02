<?php

namespace App\Models\DataTerpadu;

use CodeIgniter\Model;

class BantuanSosial extends Model
{
	protected $table                = 'bantuan_sosial';
	protected $returnType           = 'object';
	protected $allowedFields        = ['penduduk_id', 'jenis_bantuan', 'total', 'keterangan'];
	protected $validationRules      = [
		'penduduk_id' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Penduduk harus diisi.'
			]
		],
		'jenis_bantuan' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Jenis bantuan harus diisi.'
			]
		],
	];
}

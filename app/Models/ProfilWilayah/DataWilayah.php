<?php

namespace App\Models\ProfilWilayah;

use CodeIgniter\Model;

class DataWilayah extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'data_wilayah';
	protected $returnType           = 'object';
	protected $protectFields        = true;
	protected $allowedFields        = ['dusun_id', 'rw', 'rt', 'luas'];

	// Dates
	protected $useTimestamps        = true;

	// Validation
	protected $validationRules      = [
		'dusun_id' => [
		  'rules' => 'required',
		  'errors' => [
		    'required' => 'Dusun harus diisi'
		  ],
		],
	];
	protected $validationMessages   = [];
	
	
}

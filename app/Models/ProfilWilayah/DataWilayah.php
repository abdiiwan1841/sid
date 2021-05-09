<?php

namespace App\Models\ProfilWilayah;

use CodeIgniter\Model;

class DataWilayah extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'data_wilayah';
	protected $returnType           = 'object';
	protected $protectFields        = true;
	protected $allowedFields        = ['dusun', 'rw', 'rt', 'luas'];

	// Dates
	protected $useTimestamps        = true;

	// Validation
	protected $validationRules      = [
		'dusun' => 'required|is_unique[data_wilayah.dusun]',
		'rw' => 'required|integer',
		'rt' => 'required|integer',
	];
	protected $validationMessages   = [];
}

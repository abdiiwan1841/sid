<?php

namespace App\Models\ProfilWilayah;

use CodeIgniter\Model;

class DataDesa extends Model
{
	protected $table                = 'data_desa';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $returnType           = 'object';
	protected $protectFields        = true;
	protected $allowedFields        = [
		'dusun',
		'kepala_dusun',
		'rw',
		'rt',
		'laki_laki',
		'perempuan',
	];

	// Dates
	protected $useTimestamps        = true;

	// Validation
	protected $validationRules      = [
		'dusun' => 'required',
		// 'kepala_dusun' => [
		// 	'rules'  => 'required',
		// 	'errors' => [
		// 		'required' => 'Kepala dusun harus diisi',
		// 	],
		// ],
		// 'rw' => 'required|integer',
		// 'rt' => 'required|integer',
		// 'laki_laki' => [
		// 	'rules'  => 'integer',
		// 	'errors' => [
		// 		'required' => 'Jumlah laki-laki harus diisi',
		// 	],
		// ],
		// 'perempuan' => [
		// 	'rules'  => 'integer',
		// 	'errors' => [
		// 		'required' => 'Jumlah perempuan harus diisi',
		// 	],
		// ],
	];
	protected $validationMessages   = [];
	
	public function getDusun($dusun_id){
	  return $this->find($dusun_id);
	}
	public function totalData($data){
	  return $this->db->query("SELECT sum({$data}) FROM data_desa")->getRow();
	}
}

<?php

namespace App\Models\Pemerintahan;

use CodeIgniter\Model;

class InventarisDesa extends Model
{
	protected $table                = 'inventaris_desa';
	protected $returnType           = 'object';
	protected $allowedFields        = ['jenis_barang', 'kode_barang', 'identitas_barang', 'asal_barang', 'tanggal_perolehan'];
	protected $validationRules      = [
		'jenis_barang' => [
			'rules' => 'required',
			'errors' => [
				'reqiured' => 'Jenis barang harus diisi.'
			]
		],
		'kode_barang' => [
			'rules' => 'required',
			'errors' => [
				'reqiured' => 'Kode barang harus diisi.'
			]
		],
		'identitas_barang' => [
			'rules' => 'required',
			'errors' => [
				'reqiured' => 'Identitas barang harus diisi.'
			]
		],
	];
}

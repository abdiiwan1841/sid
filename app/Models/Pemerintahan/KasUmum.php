<?php

namespace App\Models\Pemerintahan;

use CodeIgniter\Model;

class KasUmum extends Model
{
	protected $table                = 'kas_umum';
	protected $returnType           = 'object';
	protected $allowedFields        = ['no_rek', 'jumlah_pengiriman', 'jumlah_pengeluaran', 'dikirim_pada', 'type_kas', 'total_saldo'];
	protected $useTimestamps        = true;
	protected $validationRules      = [
		'no_rek' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Nomor rekening harus diisi.'
			]
		],
		// 'jumlah_pengiriman' => [
		// 	'rules' => 'required',
		// 	'errors' => [
		// 		'required' => 'Jumlah pengiriman harus diisi.',
		// 		'integer' => 'Jumlah pengiriman harus berupa angka.'
		// 	]
		// ],
		// 'jumlah_pengeluaran' => [
		// 	'rules' => 'required',
		// 	'errors' => [
		// 		'required' => 'Jumlah pengeluaran harus diisi.',
		// 		'integer' => 'Jumlah pengeluaran harus berupa angka'
		// 	]
		// ],
		'dikirim_pada' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Tanggal pengiriman/pengeluaran harus diisi.',
			]
		],
		'type_kas' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Tipe Kas harus diisi.',
			]
		],
	];

	public function total()
	{
	  
		$jumlah_pengiriman = $this->db->query("SELECT sum(jumlah_pengiriman) FROM {$this->table}")->getRow()->{'sum(jumlah_pengiriman)'};
		$jumlah_pengeluaran = $this->db->query("SELECT sum(jumlah_pengeluaran) FROM {$this->table}")->getRow()->{'sum(jumlah_pengeluaran)'};
		
		$total = $jumlah_pengiriman - $jumlah_pengeluaran;
		
		return $total;
	}
}

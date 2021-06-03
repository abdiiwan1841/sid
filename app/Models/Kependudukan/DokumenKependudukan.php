<?php

namespace App\Models\Kependudukan;

use CodeIgniter\Model;

class DokumenKependudukan extends Model
{
	protected $table                = 'dokumen_kependudukan';
	protected $returnType           = 'object';
	protected $allowedFields        = ['penduduk_id', 'no_akta', 'fotokopi_ktp', 'fotokopi_ijazah'];

	// Validation
	protected $validationRules      = [
		'penduduk_id' => [
			'rules'  => 'required',
			'errors' => [
				'required' => 'Penduduk harus diisi',
			],
		],
		// 'no_akta' => [
		// 	'rules'  => 'required|integer',
		// 	'errors' => [
		// 		'required' => 'Nomor Akta harus diisi',
		// 	],
		// ],
		'fotokopi_ktp' => [
			'rules'  => 'uploaded[fotokopi_ktp]|is_image[fotokopi_ktp]|mime_in[fotokopi_ktp,image/png,image/jpg,image/jpeg]|ext_in[fotokopi_ktp,png,jpg,jpeg]|max_size[fotokopi_ktp,3000]',
			'errors' => [
				'uploaded' => 'Foto KTP harus diisi',
			],
		],
		'fotokopi_ijazah' => [
			'rules'  => 'uploaded[fotokopi_ijazah]|is_image[fotokopi_ijazah]|mime_in[fotokopi_ijazah,image/png,image/jpg,image/jpeg]|ext_in[fotokopi_ijazah,png,jpg,jpeg]|max_size[fotokopi_ijazah,3000]',
			'errors' => [
				'uploaded' => 'Foto Ijazah terakhir harus diisi',
			],
		],
	];
}

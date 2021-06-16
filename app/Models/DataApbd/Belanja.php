<?php

namespace App\Models\DataApbd;

use CodeIgniter\Model;

class Belanja extends Model
{
	protected $table                = 'anggaran_belanja';
	protected $returnType           = 'object';
	protected $allowedFields        = [
		'belanja_pegawai', 'belanja_bunga', 'belanja_subsidi', 'belanja_hibah', 'belanja_bantuan_sosial', 'belanja_bagi_hasil', 'belanja_bantuan_keuangan', 'belanja_tidak_terduga', 'belanja_pegawai_langsung', 'belanja_barang_dan_jasa', 'belanja_modal'
	];
	protected $useTimestamps        = true;
}

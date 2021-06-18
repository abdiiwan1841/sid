<?php

namespace App\Models\DataApbd\LaporanRealisasi;

use CodeIgniter\Model;

class Belanja extends Model
{
	protected $table                = 'laporan_realisasi_belanja';
	protected $returnType           = 'object';
	protected $allowedFields        = [
		'belanja_pegawai', 'belanja_bunga', 'belanja_subsidi', 'belanja_hibah', 'belanja_bantuan_sosial', 'belanja_bagi_hasil', 'belanja_bantuan_keuangan', 'belanja_tidak_terduga', 'belanja_pegawai_langsung', 'belanja_barang_dan_jasa', 'belanja_modal'
	];
	protected $useTimestamps        = true;

	public function totalBelanjaTidakLangsung()
	{
		return $this->db->query("SELECT sum(belanja_pegawai+belanja_bunga+belanja_subsidi+belanja_hibah+belanja_bantuan_sosial+belanja_bagi_hasil+belanja_bantuan_keuangan+belanja_tidak_terduga) FROM {$this->table}")->getRow()->{'sum(belanja_pegawai+belanja_bunga+belanja_subsidi+belanja_hibah+belanja_bantuan_sosial+belanja_bagi_hasil+belanja_bantuan_keuangan+belanja_tidak_terduga)'};
	}

	public function totalBelanjaLangsung()
	{
		return $this->db->query("SELECT sum(belanja_pegawai_langsung+belanja_barang_dan_jasa+belanja_modal) FROM {$this->table}")->getRow()->{'sum(belanja_pegawai_langsung+belanja_barang_dan_jasa+belanja_modal)'};
	}
}

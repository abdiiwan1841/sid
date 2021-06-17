<?php

namespace App\Models\DataApbd\LaporanRealisasi;

use CodeIgniter\Model;

class Pembiayaan extends Model
{
	protected $table                = 'laporan_realisasi_pembiayaan';
	protected $returnType           = 'object';
	protected $allowedFields        = [
		'silpa_ta', 'pencairan_dana_cadangan', 'hasil_penjualan_kekayaan_daerah', 'penerimaan_pinjaman_daerah', 'penerimaan_kembali_pemberian_pinjaman', 'penerimaan_piutang_daerah', 'penerimaan_kembali_investasi_dana_bergulir', 'pembentukan_dana_cadangan', 'penyertaan_modal', 'pembayaran_pokok_utang', 'pemberian_pinjaman_daerah', 'pembayaran_kegiatan_lanjutan', 'pengeluaran_perhitungan_pihak_ketiga', 'lainnya'
	];
	protected $useTimestamps        = true;
	protected $validationRules      = [];
}

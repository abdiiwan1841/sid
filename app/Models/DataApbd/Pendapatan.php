<?php

namespace App\Models\DataApbd;

use CodeIgniter\Model;

class Pendapatan extends Model
{
	protected $table                = 'anggaran_pendapatan';
	protected $returnType           = 'object';
	protected $allowedFields        = [
		'pajak_daerah', 'retribusi_daerah', 'hasil_pengelolaan_kekayaan', 'lainnya_pad_sah', 'dana_hasil_pajak', 'dana_alokasi_umum', 'dana_alokasi_khusus', 'hibah', 'dana_darurat', 'dana_hasil_pajak_dari_provinsi', 'dana_penyesuaian', 'bantuan_keuangan', 'lain_lain'
	];
	protected $useTimestamps        = true;



	public function totalPad()
	{
		return $this->db->query("SELECT sum(pajak_daerah+retribusi_daerah+hasil_pengelolaan_kekayaan+lainnya_pad_sah) FROM {$this->table}")->getRow()->{'sum(pajak_daerah+retribusi_daerah+hasil_pengelolaan_kekayaan+lainnya_pad_sah)'};
	}

	public function totalDaper()
	{
		return $this->db->query("SELECT sum(dana_hasil_pajak+dana_alokasi_umum+dana_alokasi_khusus) FROM {$this->table}")->getRow()->{'sum(dana_hasil_pajak+dana_alokasi_umum+dana_alokasi_khusus)'};
	}

	public function totalLainnya()
	{
		return $this->db->query("SELECT sum(hibah+dana_darurat+dana_hasil_pajak_dari_provinsi+dana_penyesuaian+bantuan_keuangan+lain_lain) FROM {$this->table}")->getRow()->{'sum(hibah+dana_darurat+dana_hasil_pajak_dari_provinsi+dana_penyesuaian+bantuan_keuangan+lain_lain)'};
	}
}

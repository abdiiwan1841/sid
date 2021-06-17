<?php

namespace App\Database\Migrations\DataApbd;

use CodeIgniter\Database\Migration;

class Pembiayaan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 255,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'silpa_ta' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'pencairan_dana_cadangan' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'hasil_penjualan_kekayaan_daerah' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'penerimaan_pinjaman_daerah' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'penerimaan_kembali_pemberian_pinjaman' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'penerimaan_piutang_daerah' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'penerimaan_kembali_investasi_dana_bergulir' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'pembentukan_dana_cadangan' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'penyertaan_modal' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'pembayaran_pokok_utang' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'pemberian_pinjaman_daerah' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'pembayaran_kegiatan_lanjutan' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'pengeluaran_perhitungan_pihak_ketiga' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'lainnya' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'created_at'       => [
				'type'       => 'DATETIME',
			],
			'updated_at'       => [
				'type'       => 'DATETIME',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('anggaran_pembiayaan');
	}

	public function down()
	{
		$this->forge->dropTable('anggaran_pembiayaan');
	}
}

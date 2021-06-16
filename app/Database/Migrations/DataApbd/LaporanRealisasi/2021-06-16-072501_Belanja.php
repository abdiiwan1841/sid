<?php

namespace App\Database\Migrations\DataApbd\LaporanRealisasi;

use CodeIgniter\Database\Migration;

class Belanja extends Migration
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
			'belanja_pegawai' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'belanja_bunga' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'belanja_subsidi' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'belanja_hibah' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'belanja_bantuan_sosial' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'belanja_bagi_hasil' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'belanja_bantuan_keuangan' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'belanja_tidak_terduga' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'belanja_pegawai_langsung' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'belanja_barang_dan_jasa' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'belanja_modal' => [
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
		$this->forge->createTable('laporan_realisasi_belanja');
	}

	public function down()
	{
		$this->forge->dropTable('laporan_realisasi_belanja');
	}
}

<?php

namespace App\Database\Migrations\DataApbd;

use CodeIgniter\Database\Migration;

class Pendapatan extends Migration
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
			'pajak_daerah' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'retribusi_daerah' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'hasil_pengelolaan_kekayaan' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'lainnya_pad_sah' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'dana_hasil_pajak' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'dana_alokasi_umum' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'dana_alokasi_khusus' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'hibah' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'dana_darurat' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'dana_hasil_pajak_dari_provinsi' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'dana_penyesuaian' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'bantuan_keuangan' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
			],
			'lain_lain' => [
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
		$this->forge->createTable('anggaran_pendapatan');
	}

	public function down()
	{
		$this->forge->dropTable('anggaran_pendapatan');
	}
}

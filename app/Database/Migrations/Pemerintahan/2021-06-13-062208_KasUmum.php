<?php

namespace App\Database\Migrations\Pemerintahan;

use CodeIgniter\Database\Migration;

class KasUmum extends Migration
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
			'no_rek' => [
				'type'           => 'INT',
				'constraint'     => 255,
				'default'					=> NULL
			],
			'jumlah_pengiriman' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> NULL
			],
			'jumlah_pengeluaran' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> NULL
			],
			'dikirim_pada' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> NULL
			],
			'type_kas' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> NULL
			],
			'created_at'       => [
				'type'       => 'DATETIME',
			],
			'updated_at'       => [
				'type'       => 'DATETIME',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('kas_umum');
	}

	public function down()
	{
		$this->forge->dropTable('kas_umum');
	}
}

<?php

namespace App\Database\Migrations\DataTerpadu;

use CodeIgniter\Database\Migration;

class BantuanSosial extends Migration
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
			'penduduk_id' => [
				'type'           => 'INT',
				'constraint'     => 255,
			],
			'jenis_bantuan' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> NULL
			],
			'total' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> NULL
			],
			'keterangan' => [
				'type'           => 'TEXT',
				'constraint'     => 255,
				'default'					=> NULL
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('bantuan_sosial');
	}

	public function down()
	{
		$this->forge->dropTable('bantuan_sosial');
	}
}

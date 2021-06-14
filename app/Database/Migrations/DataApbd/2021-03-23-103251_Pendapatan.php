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
			'jumlah_pengiriman' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> 0
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

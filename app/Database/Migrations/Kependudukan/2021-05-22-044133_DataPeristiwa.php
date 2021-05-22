<?php

namespace App\Database\Migrations\Kependudukan;

use CodeIgniter\Database\Migration;

class DataPeristiwa extends Migration
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
			'penduduk_id'       => [
				'type'       => 'INT',
				'constraint' => 255,
			],
			'keterangan_peristiwa'       => [
				'type'       => 'TEXT',
			],
			'tanggal_peristiwa'       => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
			],

		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('data_peristiwa');
	}

	public function down()
	{
		$this->forge->dropTable('data_peristiwa');
	}
}

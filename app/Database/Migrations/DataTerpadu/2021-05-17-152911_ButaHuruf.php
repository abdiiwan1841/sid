<?php

namespace App\Database\Migrations\DataTerpadu;

use CodeIgniter\Database\Migration;

class ButaHuruf extends Migration
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
			'pernah_sekolah' => [
				'type'           => 'TEXT',
				'constraint'     => 10,
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
		$this->forge->createTable('buta_huruf');
	}

	public function down()
	{
		$this->forge->dropTable('buta_huruf');
	}
}

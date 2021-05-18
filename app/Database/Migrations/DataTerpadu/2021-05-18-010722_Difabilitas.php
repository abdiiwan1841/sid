<?php

namespace App\Database\Migrations\DataTerpadu;

use CodeIgniter\Database\Migration;

class Difabilitas extends Migration
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
			'penyandang_difabilitas' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'keterangan' => [
				'type'           => 'TEXT',
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
		$this->forge->createTable('difabilitas');
	}

	public function down()
	{
		$this->forge->dropTable('difabilitas');
	}
}

<?php

namespace App\Database\Migrations\DataTerpadu;

use CodeIgniter\Database\Migration;

class PutusSekolah extends Migration
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
			'alasan_putus_sekolah' => [
				'type'           => 'TEXT',
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
		$this->forge->createTable('putus_sekolah');
	}

	public function down()
	{
		$this->forge->dropTable('putus_sekolah');
	}
}

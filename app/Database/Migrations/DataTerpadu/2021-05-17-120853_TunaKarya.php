<?php

namespace App\Database\Migrations\DataTerpadu;

use CodeIgniter\Database\Migration;

class TunaKarya extends Migration
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
			'alasan_menganggur' => [
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
		$this->forge->createTable('tuna_karya');
	}

	public function down()
	{
		$this->forge->dropTable('tuna_karya');
	}
}

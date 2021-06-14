<?php

namespace App\Database\Migrations\Pemerintahan;

use CodeIgniter\Database\Migration;

class TanahWarga extends Migration
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
				'default'					=> NULL
			],
			'luas_tanah' => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
				'default'					=> NULL
			],
			'no_sertifikat' => [
				'type'           => 'INT',
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
		$this->forge->createTable('tanah_warga');
	}

	public function down()
	{
		$this->forge->dropTable('tanah_warga');
	}
}

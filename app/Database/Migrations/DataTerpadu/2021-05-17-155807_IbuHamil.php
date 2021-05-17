<?php

namespace App\Database\Migrations\DataTerpadu;

use CodeIgniter\Database\Migration;

class IbuHamil extends Migration
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
			'usia_kehamilan' => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
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
		$this->forge->createTable('ibu_hamil');
	}

	public function down()
	{
		$this->forge->dropTable('ibu_hamil');
	}
}

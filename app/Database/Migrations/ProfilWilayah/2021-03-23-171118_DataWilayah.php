<?php

namespace App\Database\Migrations\ProfilWilayah;

use CodeIgniter\Database\Migration;

class DataWilayah extends Migration
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
			'dusun'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'rw'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'rt'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'luas'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('data_wilayah');
	}

	public function down()
	{
		$this->forge->dropTable('data_wilayah');
	}
}

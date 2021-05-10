<?php

namespace App\Database\Migrations\ProfilWilayah;

use CodeIgniter\Database\Migration;

class DataDesa extends Migration
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
			'kepala_dusun'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'rw'       => [
				'type'       => 'INT',
				'constraint' => '255',
			],
			'rt'       => [
				'type'       => 'INT',
				'constraint' => '255',
			],
			'laki_laki'       => [
				'type'       => 'INT',
				'default' => 0,
				'constraint' => '255',
			],
			'perempuan'       => [
				'type'       => 'INT',
				'default' => 0,
				'constraint' => '255',
			],
			'created_at'       => [
				'type'       => 'DATETIME',
			],
			'updated_at'       => [
				'type'       => 'DATETIME',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('data_desa');
	}

	public function down()
	{
		$this->forge->dropTable('data_desa');
	}
}

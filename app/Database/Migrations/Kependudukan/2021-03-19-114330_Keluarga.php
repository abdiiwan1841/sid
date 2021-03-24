<?php

namespace App\Database\Migrations\Kependudukan;

use CodeIgniter\Database\Migration;

class Keluarga extends Migration
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
			'no_kk'       => [
				'type'       => 'INT',
				'constraint' => 255,
			],
			'desa'       => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
			],
			'kecamatan'       => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
			],
			'kabupaten'       => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
			],
			'kode_pos'       => [
				'type'       => 'INT',
				'constraint' => 255,
			],
			'provinsi'       => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
			],
			'alamat'       => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
			],
			'rw'       => [
				'type'       => 'INT',
				'constraint' => 255,
				'null'       => true,
			],
			'rt'       => [
				'type'       => 'INT',
				'constraint' => 255,
				'null'       => true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('keluarga');
	}

	public function down()
	{
		$this->forge->dropTable('keluarga');
	}
}

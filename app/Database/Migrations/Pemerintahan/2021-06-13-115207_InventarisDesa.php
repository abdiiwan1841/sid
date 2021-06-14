<?php

namespace App\Database\Migrations\Pemerintahan;

use CodeIgniter\Database\Migration;

class InventarisDesa extends Migration
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
			'jenis_barang' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> NULL
			],
			'kode_barang' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> NULL
			],
			'identitas_barang' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> NULL
			],
			'asal_barang' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> NULL
			],
			'tanggal_perolehan' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'default'					=> NULL
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('inventaris_desa');
	}

	public function down()
	{
		$this->forge->dropTable('inventaris_desa');
	}
}

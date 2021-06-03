<?php

namespace App\Database\Migrations\Kependudukan;

use CodeIgniter\Database\Migration;

class DokumenKependudukan extends Migration
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
			'penduduk_id'       => [
				'type'       => 'INT',
				'constraint' => 255,
			],
			'no_akta'       => [
				'type'       => 'INT',
				'constraint' => 255,
			],
			'fotokopi_ijazah'       => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
			],
			'fotokopi_ijazah'       => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('dokumen_kependudukan');
	}

	public function down()
	{
		$this->forge->dropTable('dokumen_kependudukan');
	}
}

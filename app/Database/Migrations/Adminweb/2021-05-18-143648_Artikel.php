<?php

namespace App\Database\Migrations\Adminweb;

use CodeIgniter\Database\Migration;

class Artikel extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 255,
				'auto_increment' => true,
			],
			'judul' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
			'slug' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
			'thumbnail' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => NULL,
			],
			'text' => [
				'type' => 'TEXT',
			],
			'created_at' => [
				'type' => 'DATETIME',
			],
			'updated_at' => [
				'type' => 'DATETIME',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('artikel');
	}

	public function down()
	{
		$this->forge->dropTable('artikel');
	}
}

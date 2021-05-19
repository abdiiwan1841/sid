<?php

namespace App\Database\Migrations\Adminweb;

use CodeIgniter\Database\Migration;

class MenuBar extends Migration
{
	public function up()
	{

		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 255,
				'auto_increment' => true,
			],
			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
			'foto' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
			'url' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
			'is_active' => [
				'type' => 'INT',
				'constraint' => 1,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('menu_bar');
	}

	public function down()
	{
		$this->forge->dropTable('menu_bar');
	}
}

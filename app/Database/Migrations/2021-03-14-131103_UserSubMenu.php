<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserSubMenu extends Migration
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
			'menu_id' => [
				'type' => 'INT',
				'constraint' => 255,
			],
			'title' => [
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
		$this->forge->createTable('user_sub_menu');
	}

	public function down()
	{
		$this->forge->dropTable('user_sub_menu');
	}
}

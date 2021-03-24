<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserMenu extends Migration
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
			'slug'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'menu'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'icon'       => [
				'type'       => 'VARCHAR',
				'constraint' => 100,
				'default' => 'fa-th-large'
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('user_menu');
	}

	public function down()
	{
		$this->forge->dropTable('user_menu');
	}
}

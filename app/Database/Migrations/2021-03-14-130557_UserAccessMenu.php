<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserAccessMenu extends Migration
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
			'group_id' => [
				'type' => 'INT',
				'constraint' => 255,
			],
			'menu_id' => [
				'type' => 'INT',
				'constraint' => 255,
			],
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('user_access_menu');
	}

	public function down()
	{
		$this->forge->dropTable('user_access_menu');
	}
}

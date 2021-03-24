<?php

namespace App\Database\Migrations\Kependudukan;

use CodeIgniter\Database\Migration;

class Kependudukan extends Migration
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
			'keluarga_id'       => [
				'type'       => 'INT',
				'constraint' => '255',
			],
			'nama_lengkap'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'foto'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
				'default' => 'default.jpg'
			],
			'no_nik'       => [
				'type'       => 'INT',
				'constraint' => '255',
				'null'       => true,
			],
			'nama_ayah'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'nama_ibu'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'tempat_lahir'       => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
				'null'       => true,
			],
			'tanggal_lahir'       => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
				'null'       => true,
			],
			'jenis_kelamin'       => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
			],
			'agama'       => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
			],
			'pendidikan'       => [
				'type'       => 'VARCHAR',
				'constraint' => 100,
			],
			'kawin'       => [
				'type'       => 'VARCHAR',
				'constraint' => 100,
			],
			'umur'       => [
				'type'       => 'INT',
				'constraint' => 255,
			],
			'alamat'       => [
				'type'       => 'VARCHAR',
				'constraint' => 255,
				'null'       => true,
			],
			'dusun'       => [
				'type'       => 'VARCHAR',
				'constraint' => 100,
				'null'       => true,
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
			'pekerjaan'       => [
				'type'       => 'VARCHAR',
				'constraint' => 100,
				'null'       => true,
			],
			'hubungan_keluarga'    => [
				'type'       => 'VARCHAR',
				'constraint' => 100,
				'null'       => true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('penduduk');
	}

	public function down()
	{
		$this->forge->dropTable('penduduk');
	}
}

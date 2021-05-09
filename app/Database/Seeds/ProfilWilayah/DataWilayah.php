<?php

namespace App\Database\Seeds\ProfilWilayah;

use CodeIgniter\Database\Seeder;

class DataWilayah extends Seeder
{
	public function run()
	{
		$this->db->table('data_wilayah')->insert([
			'dusun' => $this->faker()->name,
			'rw' => '001',
			'rt' => '002',
			'luas' => '12km',
		]);
	}
}

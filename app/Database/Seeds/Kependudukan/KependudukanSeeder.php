<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KependudukanSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'keluarga_id' => 1,
			'nama' => 'Rido Ananda',
			'nik' => '',
			'no_kk' => '',
			'nama_ayah' => 'ayah',
			'nama_ibu' => 'ibu',
			'tanggal_lahir' => '06/07/2003',
			'jenis_kelamin' => 'Laki-laki',
			'agama' => 'Islam',
			'pendidikan' => 'SMA',
			'kawin' => 'Sudah Kawin',
			'umur' => 17,
			'alamat' => 'Medan, marelan',
			'dusun' => 'Dusun',
			'rw' => 01,
			'rt' => 01,
			'pekerjaan' => 'Kuli',
		];

		$this->db->table('penduduk')->insert($data);
	}
}

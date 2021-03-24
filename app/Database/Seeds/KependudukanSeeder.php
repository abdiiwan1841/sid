<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KependudukanSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'keluarga_id' => 1,
			'nama_lengkap' => 'Rido Ananda',
			'no_nik' => '1234567',
			'nama_ayah' => 'ayah',
			'nama_ibu' => 'ibu',
			'tempat_lahir' => 'Medan',
			'tanggal_lahir' => '06/07/2003',
			'jenis_kelamin' => 'Laki-laki',
			'agama' => 'Islam',
			'pendidikan' => 'SMA',
			'kawin' => 'Sudah Kawin',
			'umur' => 17,
			'alamat' => 'Medan, marelan',
			'dusun' => null,
			'rw' => 01,
			'rt' => 01,
			'pekerjaan' => 'Kuli',
			'hubungan_keluarga' => 'Anak Kandung',
		];

		$this->db->table('penduduk')->insert($data);
	}
}

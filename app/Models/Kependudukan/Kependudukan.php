<?php

namespace App\Models\Kependudukan;

use CodeIgniter\Model;

class kependudukan extends Model
{
  protected $table = 'penduduk';
  protected $primaryKey = 'id';
	protected $useTimestamps = true;
  protected $returnType = 'object';
  protected $validationRules = [
    // 'keluarga_id' => [
    //   'rules'  => 'required|integer',
    //   'errors' => [
    //     'required' => 'Keluarga harus diisi',
    //   ],
    // ],
    // 'foto' => 'uploaded',
    'nama_lengkap' => [
      'rules'  => 'required|string',
      'errors' => [
        'required' => 'Nama lengkap harus diisi',
      ],
    ],
    'nama_ayah' => [
      'rules'  => 'required|string',
      'errors' => [
        'required' => 'Nama ayah harus diisi.',
      ],
    ],
    'nama_ibu' => [
      'rules'  => 'required|string',
      'errors' => [
        'required' => 'Nama ibu harus diisi.',
      ],
    ],
    'tanggal_lahir' => [
      'rules'  => 'required',
      'errors' => [
        'required' => 'Tanggal lahir harus diisi',
      ],
    ],
    'tempat_lahir' => [
      'rules'  => 'required|string',
      'errors' => [
        'required' => 'Tempat lahir harus diisi',
      ],
    ],
    'agama' => 'required|string',
    'pendidikan' => 'required|string',
    'kawin' => 'required|string',
    'umur' => 'required|integer',
    'alamat' => 'required',
    'pekerjaan' => 'required',
    'hubungan_keluarga' => [
      'rules'  => 'required|string',
      'errors' => [
        'required' => 'Hubungan keluarga harus diisi',
      ],
    ],
  ];

  protected $allowedFields =
  [
    'keluarga_id',
    'nama_lengkap',
    'no_nik',
    'nama_ayah',
    'nama_ibu',
    'tempat_tanggal_lahir',
    'jenis_kelamin',
    'agama',
    'pendidikan',
    'kawin',
    'umur',
    'alamat',
    'dusun',
    'rw',
    'rt',
    'pekerjaan',
    'hubungan_keluarga',
  ];

  public function findOrFail($id)
  {
    $data = $this->find($id);
    if ($data) return $data;
    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
  }
}

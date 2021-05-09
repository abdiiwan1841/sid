<?php

namespace App\Models\Kependudukan;

use CodeIgniter\Model;

class kependudukan extends Model
{
  protected $table = 'penduduk';
  protected $primaryKey = 'id';
  protected $useTimestamps = false;
  protected $returnType = 'object';
  protected $validationRules = [
    // 'keluarga_id' => [
    //   'rules'  => 'required|integer',
    //   'errors' => [
    //     'required' => 'Keluarga harus diisi',
    //   ],
    // ],
    'foto' => 'is_image[foto]|mime_in[foto,image/png,image/jpg,image/jpeg]|ext_in[foto,png,jpg,jpeg]',
    'nama_lengkap' => [
      'rules'  => 'required|string',
      'errors' => [
        'required' => 'Nama lengkap harus diisi',
      ],
    ],
    'tanggal_lahir' => [
      'rules'  => 'required',
      'errors' => [
        'required' => 'Tanggal lahir harus diisi',
      ],
    ],
    'agama' => 'required|string',
    'pendidikan' => 'required|string',
    'kawin' => 'required|string',
    'umur' => 'required|integer',
    'alamat' => 'required',
    'pekerjaan' => 'required',
    // 'hubungan_keluarga' => [
    //   'rules'  => 'required|string',
    //   'errors' => [
    //     'required' => 'Hubungan keluarga harus diisi',
    //   ],
    // ],
  ];

  protected $allowedFields =
  [
    'keluarga_id',
    'nama_lengkap',
    'foto',
    'no_nik',
    'nama_ayah',
    'nama_ibu',
    'tempat_lahir',
    'tanggal_lahir',
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

<?php

namespace App\Models;

use CodeIgniter\Model;

class Pendudukmodel extends Model
{
    protected $table = 'penduduk';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $allowedFields =
    [
        'nik',
        'nama',
        'tmpt_lahir',
        'tgl_lahir',
        'jenkel',
        'agama',
        'pendidikan',
        'status_nikah',
        'kab',
        'kec',
        'desa',
        'dusun',
        'rw',
        'rt',
        'alamat',
        'pekerjaan',
        'kependudukan',
        'kode_pos',
    ];

    public function search($keyword)
    {
        return $this->table('penduduk')
            ->like('nik', $keyword)
            ->orLike('nama', $keyword);
    }

    public function getpenduduk($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}

<?php

namespace App\Controllers;

use App\Models\Pendudukmodel;

class Penduduk extends BaseController
{
    protected $penduduk;

    public function __construct()
    {
        $this->penduduk = new Pendudukmodel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_penduduk') ? $this->request->getVar('page_penduduk') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $user = $this->penduduk->search($keyword);
        } else {
            $user = $this->penduduk;
        }

        $data = [
            'title' => 'Penduduk',
            'penduduk' => $user->paginate(15, 'penduduk'),
            'pager' => $this->penduduk->pager,
            'currentPage' => $currentPage,
        ];

        return view('penduduk/index', $data);
    }

    public function newrecord()
    {

        $data = [
            'title' => 'Penduduk',
            'validation' => \Config\Services::validation(),
        ];

        return view('penduduk/new', $data);
    }

    public function savependuduk()
    {

        if (!$this->validate(
            [
                'nik' => [
                    'rules' => 'required|is_unique[penduduk.nik]',
                    'errors' => [
                        'required' => '{field} Harus Diisi',
                        'is_unique' => '{field} Data Sudah Ada',
                    ]
                ],
                'nama' => [
                    'rules' => 'required|is_unique[penduduk.nama]',
                    'errors' => [
                        'required' => '{field} Harus Diisi',
                        'is_unique' => '{field} Data Sudah Ada',
                    ]
                ],
            ]
        )) {
            return redirect()->to('/penduduk/newrecord')->withInput();
        }

        $this->penduduk->save([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'tmpt_lahir' => $this->request->getVar('tmpt_lahir'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'jenkel' => $this->request->getVar('jenkel'),
            'agama' => $this->request->getVar('agama'),
            'pendidikan' => $this->request->getVar('pendidikan'),
            'status_nikah' => $this->request->getVar('status_nikah'),
            'kab' => $this->request->getVar('kab'),
            'kec' => $this->request->getVar('kec'),
            'desa' => $this->request->getVar('desa'),
            'dusun' => $this->request->getVar('dusun'),
            'rw' => $this->request->getVar('rw'),
            'rt' => $this->request->getVar('rt'),
            'alamat' => $this->request->getVar('alamat'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'kependudukan' => $this->request->getVar('kependudukan'),
            'kode_pos' => $this->request->getVar('kode_pos'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/penduduk');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Penduduk',
            'validation' => \Config\Services::validation(),
            'p' => $this->penduduk->getpenduduk($id)
        ];

        return view('penduduk/edit', $data);
    }

    public function update($id)
    {

        $pen = $this->penduduk->getpenduduk($this->request->getVar('id'));
        if ($pen['nik'] == $this->request->getVar('nik')) {
            $rule_penduduk = 'required';
        } else {
            $rule_penduduk = 'required|is_unique[penduduk.nik]';
        }

        if (!$this->validate([
            'nik' => [
                'rules' => $rule_penduduk,
                'errors' => [
                    'required' => '{field} Harus Diisi',
                ]
            ],
            /* 'nama' => [
                'rules' => 'required|is_unique[penduduk.nama]',
                'errors' => [
                    'required' => '{field} Harus Diisi',
                ]
            ], */
        ])) {
            return redirect()->to('/penduduk/edit/' . $this->request->getVar('id'))->withInput();
        }

        $this->penduduk->save([
            'id' => $this->request->getVar('id'),
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'tmpt_lahir' => $this->request->getVar('tmpt_lahir'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'jenkel' => $this->request->getVar('jenkel'),
            'agama' => $this->request->getVar('agama'),
            'pendidikan' => $this->request->getVar('pendidikan'),
            'status_nikah' => $this->request->getVar('status_nikah'),
            'kab' => $this->request->getVar('kab'),
            'kec' => $this->request->getVar('kec'),
            'desa' => $this->request->getVar('desa'),
            'dusun' => $this->request->getVar('dusun'),
            'rw' => $this->request->getVar('rw'),
            'rt' => $this->request->getVar('rt'),
            'alamat' => $this->request->getVar('alamat'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'kependudukan' => $this->request->getVar('kependudukan'),
            'kode_pos' => $this->request->getVar('kode_pos'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');

        return redirect()->to('/penduduk');
    }
}

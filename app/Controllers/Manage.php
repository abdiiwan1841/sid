<?php

namespace App\Controllers;

use \Myth\Auth\Models\UserModel;

class Manage extends BaseController
{

    public function index()
    {
        $currentPage = $this->request->getVar('page_users') ? $this->request->getVar('page_users') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $user = $this->userModel->getUser();
            $user = $this->userModel->search($keyword);
        } else {
            $user = $this->userModel;
        }

        $data = [
            'title' => 'Manage User',
            'users' => $user->paginate(15, 'users'),
            'pager' => $this->userModel->pager,
            'currentPage' => $currentPage,
        ];
        $user = new UserModel();
        $user->findAll();

        $db = \Config\Database::connect();
        $builder = $db->table('auth_groups');
        $query = $builder->get();

        $data['group'] = $query->getResult();

        return view('manage/index', $data);
    }

    public function newrecord($id)
    {
        $data = [
            'title' => 'Manage User',
            'validation' => \Config\Services::validation(),
            'u' => $this->userModel->getusers($id),
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('auth_groups');
        $query = $builder->get();

        $data['groups'] = $query->getResult();

        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $query = $builder->get();

        $data['users'] = $query->getResult();

        return view('manage/new', $data);
    }

    public function savegroups($id)
    {

        $use = $this->userModel->getusers($this->request->getVar('id'));
        if ($use['username'] == $this->request->getVar('user_id')) {
            $rule_user = 'required';
        } else {
            $rule_user = 'required|is_unique[users.username]';
        }

        if (!$this->validate([
            'user_id' => [
                'rules' => $rule_user,
                'errors' => [
                    'required' => '{field} Harus Diisi',
                ]
            ],
        ])) {
            return redirect()->to('/manage/newrecord/' . $this->request->getVar('id'))->withInput();
        }

        $this->userModel->save([
            'id' => $this->request->getVar('id'),
            'group_id' => $this->request->getVar('group_id'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        $model = new Managemodel();
        $data = array(
            'user_id' => $this->request->getVar('user_id'),
            'group_id' => $this->request->getVar('group_id'),
        );
        $model->savegroup($data);


        return redirect()->to('/manage');
    }

    public function delete($id)
    {
        $this->userModel->delete($id);

        session()->setFlashdata('pesan', 'Data Berhasil DiHapus');

        return redirect()->to('/manage');
    }
}

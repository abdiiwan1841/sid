<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $returnType = 'object';
    protected $updatedField  = 'updated_at';
    protected $allowedFields =
    [
        'username',
        'group_id',
    ];

    public function menu()
    {
        return $this->hasOne('menu', 'App\Models\Menu\Menu');
        // $this->hasOne('propertyName', 'model', 'foreign_key', 'local_key');
    }
    public function getGroupUsers($id)
    {
        return $this->db->table('users')->where(['group_id' => $id])->get()->getResult();
    }

    public function search($keyword)
    {
        /* $builder = $this->db->table('users');
        $builder->like('username', $keyword);
        return $builder; */
        return $this->table('users')
            ->select('users.id as userid, username, email, name')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->like('username', $keyword)
            ->orLike('name', $keyword);
    }

    public function getUsers($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}

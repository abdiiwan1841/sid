<?php

namespace App\Models\Menu;

use CodeIgniter\Model;

class Menu extends Model
{
  protected $table = 'user_menu';
  protected $primaryKey = 'id';
  protected $returnType = 'object';
  protected $validationRules = [
    'menu' => 'required|is_unique[user_menu.menu,id,{id}]',
    'icon' => 'required',
  ];
  protected $allowedFields =
  [
    'slug',
    'menu',
    'icon',
  ];

  public function findOrFail($slug)
  {
    $data = $this->where([
      'slug' => $slug,
      'menu !=' => 'menu management'
    ])->first();
    if ($data) return $data;
    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
  }

  public function getUserAccessMenu($menuId)
  {
    return $this->db->table('user_access_menu')->select('auth_groups.name')
      ->join('auth_groups', 'auth_groups.id = user_access_menu.group_id')
      ->where('menu_id', $menuId)->get()->getResultObject();
  }
}

<?php

namespace App\Models\Menu;

use CodeIgniter\Model;

class UserAccessMenu extends Model
{
  protected $table = 'user_access_menu';
  protected $primaryKey = 'id';
  protected $returnType = 'object';
  protected $validationRules = [
    'group_id' => 'required',
    'menu_id' => 'required',
  ];
  protected $allowedFields =
  [
    'group_id',
    'menu_id'
  ];

  public function findOrFail($slug)
  {
    $data = $this->where([
      'slug' => $slug,
      'menu !=' => 'menu'
    ])->first();
    if ($data) return $data;
    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
  }
}

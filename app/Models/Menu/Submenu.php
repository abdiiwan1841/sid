<?php

namespace App\Models\Menu;

use CodeIgniter\Model;

class Submenu extends Model
{
  protected $table = 'user_sub_menu';
  protected $primaryKey = 'id';
  protected $returnType = 'object';
  protected $validationRules = [
    'menu_id' => 'required',
    'title' => 'required',
    'url' => 'required|is_unique[user_sub_menu.url],id,{id}',
  ];
  protected $allowedFields =
  [
    'menu_id',
    'title',
    'url',
    'is_active',
  ];
}

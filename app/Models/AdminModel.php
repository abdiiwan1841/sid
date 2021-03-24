<?php

namespace App\Models;

use CodeIgniter\Model;

class Managemodel extends Model
{
  protected $table = 'admin';
  protected $primaryKey = 'id';
  protected $useTimestamps = true;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $allowedFields =
  [
    'username',
    'group_id',
  ];
}

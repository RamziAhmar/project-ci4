<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $primaryKey = "id_user";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'username', 'password'];
    protected $useAutoIncrement = true;

}

<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $allowedFields = ["firstname","username", "password", "salt", "role"];
    protected $useTimestamps = false;
    
}

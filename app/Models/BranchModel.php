<?php

namespace App\Models;

use CodeIgniter\Model;

class BranchModel extends Model
{
    protected $table = "mbranch";
    protected $primaryKey = "id";
    protected $allowedFields = ["kode_branch", "nama_branch"];
    protected $useTimestamps = false;
}

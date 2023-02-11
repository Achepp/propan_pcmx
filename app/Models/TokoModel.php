<?php

namespace App\Models;

use CodeIgniter\Model;

class TokoModel extends Model
{
    protected $table = "mtoko";
    protected $primaryKey = "id";
    protected $allowedFields = ["id_cabang","kode_toko", "nama_toko"];
    protected $useTimestamps = false;

    public function getDetailToko()
    {
        return $this->db->table('mtoko','mcabang','mbranch')
        ->join('mcabang', 'mcabang.id = mtoko.id_cabang')
        ->join('mbranch','mbranch.id = mcabang.id_branch')
        ->get()->getResultArray();
    }
}

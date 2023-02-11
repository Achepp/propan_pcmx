<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TokoModel;

class CabangController extends BaseController
{
    public function index()
    {
        $cabang = new TokoModel();
        $data['mtoko'] = $cabang->getDetailToko();
        
        return view('content/cabang/index',  $data);
    }
}

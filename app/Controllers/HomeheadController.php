<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomeheadController extends BaseController
{
    public function index()
    {
        return view('content/homehead/index');
    }
}

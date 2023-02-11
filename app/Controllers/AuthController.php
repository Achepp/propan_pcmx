<?php

namespace App\Controllers;
use App\Models\UserModel;

class AuthController extends BaseController
{
    // public function __construct()
    // {
    //     $userModel = new UserModel();
    //     $validation = \Config\Services::validation();
    //     $session = \Config\Services::session();
    // }
    public function index()
    {
        return view('content/auth/index');
    }

    public function create()
    {
        return view('content/auth/create');
    }

    public function store()
    {

        $salt = uniqid('', true);
        $password = md5($this->request->getVar('password')).$salt;
        $data = [
            'firstname' => $this->request->getVar('firstname'),
            'username' => $this->request->getVar('username'),
            'role' => $this->request->getVar('role'),
            'salt' => $salt,
            'password' => $password,
        ];

        // $save = $this->UserModel->save($data);

        // if(!$save){
        //     session()->setFlashdata('error', 'Has benn failed!');
        //     return redirect()->to('/User');
        // }else{
        //     session()->setFlashdata('login', 'Has been success!!');
        //     return redirect()->to('/User');
        // }


    }
}

<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\ModelAuth;

class Auth extends BaseController
{
    protected $modelAuth;
    
    public function __construct()
    {
        $this->modelAuth = new ModelAuth();
        $this->session = \Config\Services::session();
    }

    public function login()
    {
        $data = [
            'title' => 'Login Uidesummit 2022',
        ];
        return view('auth/login', $data);
    }
    
    // function check authentication
    public function checkAuth()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $user = $this->modelAuth->where('email', $email)->first();
        $verify_password = Hash::verify($password, $user['password']);
        if (!$verify_password) {
            $this->session->setFlashdata('error', 'Email or Password is incorrect');
            return redirect()->to('/login')->withInput();
        } else {
            $id_user = $user['id'];
            $this->session->set('login', $id_user);
            return redirect()->to('/dashboard');
        }
    }

    // function logout
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/login');
    }
}

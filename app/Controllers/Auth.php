<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        $data = [
            'title' => 'Login Uidesummit 2022',
        ];
        return view('auth/login', $data);
    }


    public function register()
    {
        $data = [
            'title' => 'Login Uidesummit 2022',
        ];
        return view('auth/register', $data);
    }
}

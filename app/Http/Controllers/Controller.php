<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index()
    {
     return view('login.login');
    }
    public function register()
    {
        return view('login.register');
    }

}

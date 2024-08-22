<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('login.login');
    }
    public function save(Request $request)
    {
     
        $data = $request->validate([
            'name'=>'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8'
        ]);

        User::create($data);
        return redirect()->route('blog.login')->with('status', 'Registration successful! Please log in.');
    }
}

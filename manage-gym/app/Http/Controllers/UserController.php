<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view('user.index');
    }
    public function index()
    {
        return view('admin.index');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
}

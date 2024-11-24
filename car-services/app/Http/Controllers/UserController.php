<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user=Auth::user();
        return view('admin.index',compact('user'));
    }
    public function login()
    {
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Subcription;
use App\Models\User;
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
    public function usersIndex()
    {
        $users=User::where('is_active',1)->where('role',1)->paginate(2);
        return view('admin.users.index',compact('users'));
    }
}

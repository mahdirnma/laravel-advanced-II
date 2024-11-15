<?php

namespace App\Http\Controllers;

use App\Models\Subcription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function usersIndex(Request $request)
    {
        $users=User::where('is_active',1)->where('role',1)->get();
        $users2=[];
        if ($request->subscription=='yes'){
            foreach ($users as $user) {
                if ($user->subcription){
                    array_push($users2,$user);
                }
            }
        }
        $users=User::where('is_active',1)->where('role',1)->paginate(2);
        return view('admin.users.index',compact('users','users2'));
    }

    public function subscription()
    {
        $user=Auth::user();
        $subscription=$user->subcription;
        return view('user.subscription',compact('user','subscription'));
    }
}

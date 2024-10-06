<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(StoreUserLoginRequest $request)
    {
        $myDate=$request->only('email','password');
        if(Auth::attempt($myDate)){
            return to_route('dashboard');
        }else{
            return redirect()->back();
        }
    }
    public function logout(){
        Auth::logout();
        return to_route('login.show');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(StoreUserLoginRequest $request){
        $myData = $request->only('email', 'password');
        if(Auth::attempt($myData)){
            return to_route('home');
        }else{
            return redirect()->back();
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login.show');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserLoginRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(StoreUserLoginRequest $request)
    {
        $myData=$request->only('email','password');
        if(Auth::attempt($myData)){
            return to_route('index');
        }else{
            return redirect()->back();
        }
    }

    public function register(StoreUserRequest $request)
    {
        $password=$request->password;
        $confirmPassword=$request->confirmPassword;
        if($password==$confirmPassword){
            $user=User::create($request->validated());
            return 2;
        }else{
            return redirect()->back();
        }
    }
}

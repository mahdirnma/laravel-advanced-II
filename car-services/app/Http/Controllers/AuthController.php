<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserLoginRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(StoreUserLoginRequest $request){
        $myData = $request->only('email', 'password');
        if(Auth::attempt($myData)){
            return to_route('index');
        }else{
            return redirect()->back();
        }
    }

    public function register(StoreUserRequest $request)
    {
        if ($request->password==$request->confirmPassword){
            $user=User::create($request->validated());
            if($user){
                Auth::login($user);
                return to_route('index');
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
    }
    public function logout(){
        Auth::logout();
        return to_route('login');
    }
}

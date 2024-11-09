<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(StoreUserLoginRequest $request)
    {
        $myData=$request->only('email','password');
        if(Auth::attempt($myData)){
            if (Auth::user()->role==1){
            return to_route('index');
            }elseif (Auth::user()->role==2){
                return 2;
            }
        }else{
            return redirect()->back();
        }
    }
}

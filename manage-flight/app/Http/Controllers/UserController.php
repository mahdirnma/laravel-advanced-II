<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Ticket;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $locations=Location::where('is_active',1)->count();
        $tickets=Ticket::where('is_active',1)->count();
        return view('admin.dashboard',compact('locations','tickets'));
    }

    public function login()
    {
        return view('auth.login');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Service;
use App\Models\Vehicle;
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

    public function services(Request $request)
    {
        $service=Service::find($request->vehicle_id);
        $n_km=$request->km;
        $services=Service::all();
        $vehicle_id=$request->vehicle_id;
        foreach ($services as $service) {
            $km=$service->km;
            if ($n_km>$km){
                if($service->logs->last()==null){
                    $x=(floor($n_km/$km))+1;
                    $x=($x*$km)-$n_km;
                }else{
                    $last_service=$service->logs->last()->km;
                    $x=floor($n_km/$km);
                    $x=(($x*$km)+$last_service)-$n_km;
                }
            }else{
                if($service->logs->last()==null){
                    $x=$km-$n_km;
                }else{
                    $last_service=$service->logs->last()->km;
                    $x=($km+$last_service)-$n_km;
                }
            }
            $id=$service->id;
            $y=$services->find($id);
            $y->km=$x;
        }
        $log=Log::create([
            'km'=>$request->km,
            'vehicle_id'=>$request->vehicle_id
        ]);
        if ($log) {
            return view('admin.service',compact('log','services','vehicle_id'));
        }else{
            return redirect()->back();
        }
    }

    public function service_set(Request $request)
    {
        $log_id=$request->log;
        $service_id=$request->service;
        $service=Service::find($service_id);
        $service->logs()->attach($log_id);
        return to_route('index');
    }
}

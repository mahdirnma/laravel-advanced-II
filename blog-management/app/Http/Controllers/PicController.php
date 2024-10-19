<?php

namespace App\Http\Controllers;

use App\Models\Pic;
use App\Http\Requests\StorePicRequest;
use App\Http\Requests\UpdatePicRequest;

class PicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pics=Pic::where('is_active', 1)->paginate(2);
        return view('admin.pics.index', compact('pics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePicRequest $request)
    {
        $name='';
        if ($pic = $request->file('url')) {
            $name = time() . $pic->getClientOriginalName();
            $pic->move(public_path().'/upload/', $name);
        }
        $pic=Pic::create([
            ...$request->validated(),
            'url' => $name,
        ]);
        if ($pic) {
            return to_route('pics.index');
        }else{
            return to_route('pics.create');
        }
    }

    public function edit(Pic $pic)
    {
        return view('admin.pics.edit', compact('pic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePicRequest $request, Pic $pic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pic $pic)
    {
        //
    }
}

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePicRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pic $pic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pic $pic)
    {
        //
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

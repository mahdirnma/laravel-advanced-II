<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::where('is_active', 1)->paginate(2);
        return view('admin.images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.images.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreImageRequest $request)
    {
        $name='';
        if($image = $request->file('url')){
            $name = time().'-'.$image->getClientOriginalName();
            $image->move(public_path().'/upload/', $name);
        }
        $status=Image::create([
            ...$request->validated(),
            'url'=>$name
        ]);
        if($status){
            return to_route('images.index');
        }else{
            return to_route('images.create');
        }
    }

    public function edit(Image $image)
    {
        return to_route('images.edit',['image'=>6]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImageRequest $request, Image $image)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        //
    }
}

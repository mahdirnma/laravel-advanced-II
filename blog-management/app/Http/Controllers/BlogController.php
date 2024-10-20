<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTagRequest;
use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Category;
use App\Models\Pic;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::where('is_active', 1)->paginate(2);
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('is_active', 1)->get();
        return view('admin.blogs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $name='';
        if ($pic=$request->file('main_pic')) {
            $name=time().'-'.$request->file('main_pic')->getClientOriginalName();
            $pic->move(public_path().'/upload/', $name);
        }
        $blog=Blog::create([
            ...$request->validated(),
            'main_pic'=>$name
        ]);
        if ($blog){
            return to_route('blogs.index');
        }else{
            return to_route('blogs.create');
        }
    }

    public function edit(Blog $blog)
    {
        $categories = Category::where('is_active', 1)->get();
        return view('admin.blogs.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $name='';
        if ($pic=$request->file('main_pic')) {
            $name=time().'-'.$request->file('main_pic')->getClientOriginalName();
            $pic->move(public_path().'/upload/', $name);
        }
        $status=$blog->update([
            ...$request->validated(),
            'main_pic'=>$name
        ]);
        if ($status){
            return to_route('blogs.index');

        }else{
            return to_route('blogs.edit', $blog);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->update([
            'is_active'=>0
        ]);
        return to_route('blogs.index');
    }

    public function editTag(Blog $blog)
    {
        $tags=Tag::where('is_active', 1)->get();
        return view('admin.blogs.editTag', compact('blog', 'tags'));
    }
    public function updateTag(Request $request, Blog $blog){
        $tags=$request->tags;
        $blog->tags()->sync($tags);
        return to_route('editTag', $blog);
    }

    public function editImage(Blog $blog)
    {
        $pics=Pic::where('is_active', 1)->get();
        return view('admin.blogs.editImage', compact('blog', 'pics'));
    }
    public function updateImage()
    {

    }
}

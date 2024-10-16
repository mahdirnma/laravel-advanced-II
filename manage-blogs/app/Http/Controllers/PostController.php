<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTagRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('is_active',1)->paginate(2);
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('is_active',1)->get();
        return view('admin.posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $name='';
        if ($image=$request->file('main_pic')) {
            $name=time().'-'.$request->file('main_pic')->getClientOriginalName();
            $image->move(public_path('/upload/'),$name);
        }
        $post= Post::create([
            ...$request->validated(),
            'main_pic'=>$name
        ]);
        if ($post) {
            return to_route('posts.index');
        }else{
            return to_route('posts.create');
        }
    }

    public function edit(Post $post)
    {
        $categories = Category::where('is_active',1)->get();
        return view('admin.posts.edit',compact('post','categories'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $name='';
        if ($image=$request->file('main_pic')) {
            $name=time().'-'.$request->file('main_pic')->getClientOriginalName();
            $image->move(public_path('/upload/'),$name);
        }
        $status=$post->update([
            ...$request->validated(),
            'main_pic'=>$name,
        ]);
        if ($status) {
            return to_route('posts.index');
        }else{
            return to_route('posts.edit',$post);
        }
    }
    public function destroy(Post $post)
    {
        $post->update([
            'is_active'=>0,
        ]);
        return to_route('posts.index');
    }
    public function show(Post $post)
    {
        return view('admin.posts.tags',compact('post'));
    }

    public function addTag(Post $post)
    {
        $tags=Tag::where('is_active',1)->get();
        return view('admin.posts.createTag',compact('post','tags'));
    }

    public function createTag(Post $post,Request $request)
    {
        $tag=$request->tag_id;
        $post->tags()->attach($tag);
        return to_route('posts.show',$post);
    }
    public function editTag(Post $post)
    {
        $tags=Tag::where('is_active',1)->get();
        return view('admin.posts.editTag',compact('post','tags'));
    }
    public function updateTag(Request $request, Post $post){
        $tags=$request->tags;
        $status=$post->tags()->sync($tags);
        if ($status) {
            return to_route('posts.show',$post);
        }else{
            return to_route('posts.edit',$post);
        }
    }
    public function showImage(Post $post)
    {
        $images=Image::where('is_active',1)->get();
        return view('admin.posts.images',compact('post','images'));
    }
}

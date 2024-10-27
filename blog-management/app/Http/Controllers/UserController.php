<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.home');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function userIndex()
    {
        $categories = Category::where('is_active', 1)->get();
        $tags = Tag::where('is_active', 1)->get();
        $blogs = Blog::where('is_active', 1)->get();
        return view('user.index', compact('categories', 'tags', 'blogs'));
    }
    public function blogSingle(Blog $blog)
    {
        return view('user.blogs', compact('blog'));
    }

    public function tagBlogs(Tag $tag)
    {
        return view('user.tagBlogs', compact('tag'));
    }
    public function categoryBlogs(Category $category)
    {
        return view('user.categoryBlogs', compact('category'));
    }
}

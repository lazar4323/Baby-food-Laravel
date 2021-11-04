<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.blog',compact('blogs'));
    }

    public function blogSingle($id)
    {
        $blog = Blog::find($id);
        return view('blogs.blogSingle',compact('blog'));
    }
}

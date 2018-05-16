<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index() 
    {
        $blogs = Blog::all();

        return view('blog.index', compact('blogs'));
    }

    public function show(Request $request) 
    {
        $blog = Blog::where('slug', $request->slug)->firstOrFail();

        $favourites = Blog::all()->random(3);

        return view('blog.show', compact('blog', 'favourites'));
    }

}

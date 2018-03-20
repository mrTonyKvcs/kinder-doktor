<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index() 
    {
        return view('blog.index');
    }

    public function show(Request $request) 
    {
        return view('blog.show');
    }

}

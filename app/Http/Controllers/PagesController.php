<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $allBlogs = Post::all();

        if (count($allBlogs) >= 3) {
            $blogs = $allBlogs->random(3);
        } else {
            $blogs = $allBlogs;
        }

        return view('pages.index', compact('blogs'));
    }

    public function homeopathy()
    {
        return view('pages.homeopathy');
    }

    public function schussler()
    {
        return view('pages.schussler');
    }

    public function services() 
    {
        return view('pages.services');
    } 
    
    public function contact() 
    {
        return view('pages.contact');
    }
}

<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $blogs = Blog::all()->random(3);

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

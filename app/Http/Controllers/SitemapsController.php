<?php

namespace App\Http\Controllers;

use App\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SitemapsController extends Controller
{
    public function index()
    {
        $now = Carbon::now()->toW3cString();

        $blogs = Blog::all();

        return response(view('sitemaps.index', compact('now', 'blogs')))->header('Content-Type', 'application/xml');
    }
}

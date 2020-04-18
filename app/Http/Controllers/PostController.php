<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    /**
     * all Post
     *
     */
    public function index() 
    {
        $posts = Post::paginate(6);

        return view('posts.index', compact('posts'));
    }

    /**
     * show post
     *
     * @param Request $request
     */
    public function show(Request $request) 
    {
        $post = Post::where('slug', $request->slug)->firstOrFail();

        $allPosts = Post::all();

        if (count($allPosts) >= 3) {
            $favourites = $allPosts->random(3);
        } else {
            $favourites = $allPosts;
        }

        return view('posts.show', compact('post', 'favourites'));
    }

}

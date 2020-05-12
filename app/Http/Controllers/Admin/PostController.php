<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderByDesc('published_at')
            ->get();

        return view('admin.index', compact('posts'));
    }

    /**
     * store
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'editor' => 'required',
            'description' => 'required',
            'images_path' => 'required',
            'published_at' => 'required'
        ]);

        $imageName = $this->imageUpload($request);

        $post = Post::create([
            'slug' => str_slug($request->title),
            'title' => $request->title,
            'editor' => $request->editor,
            'description' => $request->description,
            'images_path' => $imageName,
            'published_at' => $request->published_at
        ]);

        return back()->with('success', 'Sikeresen létrehoztad a bejegyzést!');
    }

    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('admin.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->update($request->all());

        if ($request->has('images_path')) {
            $imageName = $this->imageUpload($request);

            $post->images_path = $imageName;

            $post->save();
        }

        return back()->with('success', 'Sikeresen módosítottad a bejegyzést!');
    }

    /**
     * destroy
     *
     * @param mixed $id
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        return back()->with('success', 'Sikeresen törölted a bejegyzést!');
    }


    /**
     * imageUpload
     *
     * @param mixed $request
     */
    public function imageUpload($request)
    {
        $image = $request['images_path'];

        $input['images_name'] = str_slug($request['title']) . '.' . $image->getClientOriginalExtension();

        $destinationPath = storage_path('app/public/posts');

        $image->move($destinationPath, $input['images_name']);

        return $input['images_name'];
    }
}

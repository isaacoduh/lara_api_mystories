<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // All Posts Method
    public function index()
    {
        return Post::all();
    }

    // Show single post
    public function show($id)
    {
        return Post::find($id);
    }

    // Create a single post
    public function store(Request $request)
    {
        return Post::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrfail($id);
        $post->update($request->all());
        return $post;
    }

    public function delete(Request $request, $id)
    {
        $post = Post::findOrfail($id);
        $post->delete();

        return 204;
    }


}

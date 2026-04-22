<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    public function status(Post $post)
    {
        return view('posts.status',  ['post' => $post]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'content' => ['required']
        ]);

        Post::create($data);

        return redirect()->route('index')->with('status', 'Post creaded successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => ['required'],
            'content' => ['required']
        ]);

        $post->update($data);

        return redirect()->route('index')->with('status', 'Post updated successfully!');
    }

    public function updateStatus(Request $request, Post $post)
    {
        $data = $request->validate([
            'status' => ['required']
        ]);

        $post->update($data);

        return redirect()->route('index')->with('status', 'Status updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('index')->with('status', 'Post deleted successfully!');
    }    
}

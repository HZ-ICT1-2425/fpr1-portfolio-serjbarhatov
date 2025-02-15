<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        $menu = MainController::menu('blog');
        return view('admin.create-post', compact('menu'));

    }

    public function store(Request $request)
{
    // Validate request data
    $request->validate([
        'title' => 'required|unique:posts,title|max:255',
        'slug' => 'required|unique:posts,slug|max:255',
        'body' => 'required',
    ]);

    // Create the post
    Post::create([
        'title' => $request->title,
        'slug' => $request->slug,
        'body' => $request->body,
    ]);

    // Redirect to the blog page
    return redirect()->route('blog')->with('success', 'Post created successfully!');
}
}

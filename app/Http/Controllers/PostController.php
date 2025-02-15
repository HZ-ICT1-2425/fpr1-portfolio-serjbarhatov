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
        $attributes = $this->getValidAttributes($request, true);

        Post::create($attributes);

        // Redirect to the blog page
        return redirect()->route('blog')->with('success', 'Post created successfully!');
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect()->route('blog')->with('success', 'Post deleted successfully!');
    }

    public function edit(Post $post)
    {
        $menu = MainController::menu('blog');
        return view('admin.edit-post', compact('menu', 'post'));
    }

    public function update(Request $request, Post $post)
    {
        $attributes = $this->getValidAttributes($request);

        $post->update($attributes);

        return redirect()->route('blog')->with('success', 'Post updated successfully!');
    }

    private function getValidAttributes(Request $request, $checkUnique = false)
    {
        $uniqueRequired = $checkUnique ? '|unique:posts' : '';
        $request->validate([
            'title' => 'required|min:10|max:100' . $uniqueRequired,
            'slug' => 'required|min:10|max:255' . $uniqueRequired,
            'body' => 'required|min:10|max:65000',
            'summary' => 'required|min:10|max:65000',
        ]);

        return [
            'title' => $request->title,
            'slug' => $request->slug,
            'article_source' => $request->article_source,
            'summary' => $request->summary,
            'body' => $request->body,
        ];
    }
}

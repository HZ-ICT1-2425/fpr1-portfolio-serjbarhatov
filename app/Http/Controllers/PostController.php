<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    /**
     * @return Factory|View|Application
     */
    public function create()
    {
        $menu = menu('blog');
        return view('admin.posts.create', compact('menu'));
    }

    public function store(Request $request)
    {
        $attributes = $this->getValidAttributes($request, true);

        Post::create($attributes);

        return redirect()->route('blog')->with('success', 'Post created successfully!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('blog')->with('success', 'Post deleted successfully!');
    }

    public function edit(Post $post)
    {
        $menu = menu('blog');
        return view('admin.posts.edit', compact('menu', 'post'));
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
        return $request->validate([
            'title' => 'required|min:10|max:100' . $uniqueRequired,
            'slug' => 'required|min:10|max:255' . $uniqueRequired,
            'body' => 'required|min:10|max:65000',
            'summary' => 'required|min:10|max:65000',
            'article_source' => 'nullable|url',
        ]);
    }
}

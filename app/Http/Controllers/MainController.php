<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\View\View;

use App\Models\Post;

class MainController extends Controller
{
    public function welcome(): view {
        $hideBackground = true;
        $menu = menu('welcome');
        return view('welcome', compact('menu', 'hideBackground'));
    }

    public function profile(): view {
        $menu = menu('profile');
        return view('profile', compact('menu'));
    }

    public function dashboard(): view {
        $menu = menu('dashboard');
        return view('dashboard', compact('menu'));
    }

    public function faq(): view {
        $faqs = Faq::orderBy('updated_at', 'desc')->get();
        $menu = menu('faq');
        return view('faq', compact('menu', 'faqs'));
    }

    public function blog(): view {
        $menu = menu('blog');
        $posts = Post::orderBy('updated_at', 'desc')->get();
        return view('blog', compact('menu', 'posts'));
    }

    public function blogPost(string $slug): view {
        $menu = menu('blog');
        $post = Post::where('slug', $slug)->first();
        return view('post', compact('menu', 'post'));
    }
}

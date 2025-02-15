<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

use App\Models\Post;

class MainController extends Controller
{
    public static function menu(string $route): array {
        return [
            ['url' => route('home'), 'title' => 'Home', 'isActive' => $route == 'welcome', 'iconClass' => 'fa fa-home'],
            ['url' => route('profile'), 'title' => 'Profile', 'isActive' => $route == 'profile', 'iconClass' => 'fa fa-user'],
            ['url' => route('dashboard'), 'title' => 'Dashboard', 'isActive' => $route == 'dashboard', 'iconClass' => 'fa fa-dashboard'],
            ['url' => route('faq'), 'title' => 'FAQ', 'isActive' => $route == 'faq', 'iconClass' => 'fa fa-question-circle'],
            ['url' => route('blog'), 'title' => 'Blog', 'isActive' => $route == 'blog', 'iconClass' => 'fa fa-comment'],
            ['url' => 'https://github.com/serjbarhatov/serjbarhatov.github.io', 'title' => 'GitHub',
                'iconClass' => 'fa fa-github', 'isExternal' => true],
        ];
    }

    public function welcome(): view {
        $hideBackground = true;
        $menu = MainController::menu('welcome');
        return view('welcome', compact('menu', 'hideBackground'));
    }

    public function profile(): view {
        $menu = MainController::menu('profile');
        return view('profile', compact('menu'));
    }

    public function dashboard(): view {
        $menu = MainController::menu('dashboard');
        return view('dashboard', compact('menu'));
    }

    public function faq(): view {
        $menu = MainController::menu('faq');
        return view('faq', compact('menu'));
    }

    public function blog(): view {
        $menu = MainController::menu('blog');
        $posts = Post::orderBy('updated_at', 'desc')->get();
        return view('blog', compact('menu', 'posts'));
    }

    public function blogPost(string $slug): view {
        $menu = MainController::menu('blog');
        $post = Post::where('slug', $slug)->first();
        return view('post', compact('menu', 'post'));
    }
}

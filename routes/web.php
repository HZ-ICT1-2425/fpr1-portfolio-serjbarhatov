<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'welcome'])->name('home');

Route::get('/profile', [MainController::class, 'profile'])->name('profile');

Route::get('/faq', [MainController::class, 'faq'])->name('faq');

Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');

Route::get('/blog', [MainController::class, 'blog'])->name('blog');

Route::get('/blog-posts/{postName}', [MainController::class, 'blogPost'])->name('blog-post');

<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'welcome'])->name('home');

Route::get('/profile', [MainController::class, 'profile'])->name('profile');

Route::get('/faq', [MainController::class, 'faq'])->name('faq');

Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');

Route::get('/blog', [MainController::class, 'blog'])->name('blog');

Route::get('/blog-posts/{slug}', [MainController::class, 'blogPost'])->name('blog-post');


// Blog posts CRUD
Route::get('/posts/create', [PostController::class, 'create'])->name('admin.create-post');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('admin.edit-post');

Route::delete('posts/{post}', [PostController::class, 'delete'])->name('admin.delete-post');

Route::put('posts/{post}', [PostController::class, 'update'])->name('admin.update-post');

// FAQ CRUD
Route::get('/faq/create', [FaqController::class, 'create'])->name('admin.create-faq');

Route::post('/faq', [FaqController::class, 'store'])->name('faq.store');

Route::get('faq/{faq}/edit', [FaqController::class, 'edit'])->name('admin.edit-faq');

Route::delete('delete-faq/{faq}', [FaqController::class, 'delete'])->name('admin.delete-faq');

Route::put('faq/{faq}', [FaqController::class, 'update'])->name('admin.update-faq');

<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Main Pages
Route::get('/', [MainController::class, 'welcome'])->name('home');
Route::get('/profile', [MainController::class, 'profile'])->name('profile');
Route::get('/faq', [MainController::class, 'faq'])->name('faq');
Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/blog-posts/{slug}', [MainController::class, 'blogPost'])->name('blog-post');

// RESTful resource routes for Blog Posts (Admin)
Route::resource('posts', PostController::class)->names([
    'create'  => 'admin.posts.create',   // GET /posts/create  (Show create form)
    'store'   => 'admin.posts.store',    // POST /posts  (Store new post)
    'edit'    => 'admin.posts.edit',     // GET /posts/{post}/edit  (Show edit form)
    'update'  => 'admin.posts.update',   // PUT/PATCH /posts/{post}  (Update post)
    'destroy' => 'admin.posts.destroy',  // DELETE /posts/{post}  (Delete post)
]);

// RESTful resource routes for FAQ (Admin)
Route::resource('faqs', FaqController::class)->names([
    'create'  => 'admin.faqs.create',   // GET /faqs/create  (Show create form)
    'store'   => 'admin.faqs.store',    // POST /faqs  (Store new FAQ)
    'edit'    => 'admin.faqs.edit',     // GET /faqs/{faq}/edit  (Show edit form)
    'update'  => 'admin.faqs.update',   // PUT/PATCH /faqs/{faq}  (Update FAQ)
    'destroy' => 'admin.faqs.destroy',  // DELETE /faqs/{faq}  (Delete FAQ)
]);

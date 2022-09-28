<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

Route::get('/' , function (){
    return redirect()->route('post.index');
});

Route::resource('posts' , PostController::class);

//
//Route::get('/posts' , [PostController::class, 'index'])->name('posts.index');
//Route::get('posts/create' , [PostController::class , 'create'])->name('posts.create');
//Route::post('/posts' , [PostController::class , 'store'])->name('posts.store');
//Route::get('/posts/{id}' , [PostController::class , 'show'])->name('posts.show');

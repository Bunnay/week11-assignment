<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
Route::get('categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
Route::post('categories/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');
Route::put('categories/{category}/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
Route::delete('categories/{category}/delete', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy');

// Route::resource('posts', \App\Http\Controllers\PostController::class);
Route::get('posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts');
Route::get('posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
Route::post('posts/store', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
Route::get('posts/{post}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/{post}/update', [App\Http\Controllers\PostController::class, 'update'])->name('posts.update');
Route::delete('posts/{post}/delete', [App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');

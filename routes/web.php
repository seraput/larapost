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
    return view('layouts/main');
});


Route::get('/home', [\App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get('posts/show', [\App\Http\Controllers\PostController::class, 'show'])->name('show');
Route::get('posts/create', [\App\Http\Controllers\PostController::class, 'create'])->name('create');
Route::post('post', [\App\Http\Controllers\PostController::class, 'store']);
Route::get('posts/{post}/edit', [\App\Http\Controllers\PostController::class, 'edit'])->name('edit');
Route::put('post/{post}', [\App\Http\Controllers\PostController::class, 'update']);
Route::delete('post/{post}', [\App\Http\Controllers\PostController::class, 'destroy']);
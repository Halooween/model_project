<?php

use App\Http\Controllers\PostController;
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
    return view('welcome');
});
Route::get('post', [PostController::class, 'index'])->name('post.index');
Route::get('post/create', [PostController::class, 'create'])->name('post.create');
Route::get('post/show/{id}', [PostController::class, 'show'])->name('post.show');
Route::post('post/store', [PostController::class, 'store'])->name('post.store');
Route::get('post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::put('post/update/{id}', [PostController::class, 'update'])->name('post.update');
Route::delete('post/{id}', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('post/restore', [PostController::class, 'restore'])->name('post.restore');


// Route::resource('/post',PostController::class);
// Route::get('/restore', [PostController::class, 'restore'])->name('posts.restore');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserProfileController;

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

Route::get('/users', function () {
    return view('users');
});

// Route::get('/posts', function () {
//     return view('posts');
// });

// Route::controller(PostController::class)->group(function(){
//     Route::get('/posts','ShowUsers');
//     Route::get('/posts/create','createPost');
//     Route::get('/posts/edit/{id}','createPost');
//     Route::get('/posts/edit/{id}','createPost');
// });
Route::resource('posts',PostController::class);

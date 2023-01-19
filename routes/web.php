<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Gunawan Pratama",
        "email" => "gunawan8pratama@gmail.com",
        "image" => "tama.jpg"
    ]);
});


Route::controller(PostController::class)->group(function () {
    Route::get('/blog', 'index');
    Route::get('/blog/{post:slug}', 'show');
});

Route::get('/categories', function(){
    return view('categories', [
        "title" => "Categories",
        "active" => "categories",
        "categories" => Category::all()
    ]);
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index')->middleware('guest');
    Route::post('/register', 'store');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');







// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts', [
//         "title" => "Post by Category: $category->name" ,
//         "active" => "categories",
//         "posts" => $category->posts->load('category', 'user')
//     ]);
// });

// Route::get('/authors/{user:username}', function(User $user){
//     return view('posts', [
//         "title" => "Post by Author: $user->name",
//         "active" => "post",
//         "posts" => $user->post->load('category', 'user')
//     ]);
// });
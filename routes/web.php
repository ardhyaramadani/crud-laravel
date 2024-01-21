<?php

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;




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
    return view ('home', [
        "tittle" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "tittle" => "About",
        "active" => "about",
        "name" => "Ardhya Ramadani",
        "email" => "ardhya.ramadani21@gmail.com",
        "image" => "gambar.jpeg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

//halaman single post

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function()
{
    return view('categories', [
        'tittle' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()

    ]);

});


Route::get('/index', [LoginController::class, 'index']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

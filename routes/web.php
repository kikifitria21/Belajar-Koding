<?php

use App\Models\post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardPostController;

use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('home', [
        "title"=> "Home",
        "active"=>'home'
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title"=> "About",
        "active"=> 'about'

    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']); 
Route::get('/posts', [PostController::class, 'index']);
Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()

    ]);

});
 
Route::get('/categories/{category:slug}', function(Category $category) {
    // return $category;
    return view('posts', [
        'title' => "Post By Category : $category->name",
        'blog_posts' => $category->posts->load('category','user')

    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
    'title' => "post By Author : $author->name",
    'active' => 'posts',
    'blog_posts' => $author->posts->load('category','user'),

]);

});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view ('dashboard.index');
})->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource ('/dashboard/posts',DashboardPostController::class)->middleware('auth');



<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
			"title" => 'Home'
		]);
});

Route::get('/about', function () {
    return view('about', [
			// Associative array
			"title" => 'About',
			"name" => "Muhammad Hafiz",
			"email" => "mhafiz.aa@gmail.com",
			"image" => "foto.jpg"
		]);
});

// All page
Route::get('/posts', [PostController::class, 'index']);
// Single page
Route::get('posts/{post:slug}', [PostController::class, 'show']);


Route::get('categories', function(){
	return view('categories',[
		'title' => 'Poat Categories',
		'categories' => Category::all()
	]);
});


Route::get('/categories/{category:slug}', function(Category $category){
	return view('category', [
		'title' => $category->name,
		'posts' => $category->posts,
		'category' => $category->name
	]);
});

Route::get('authors/{author:username}', function (User $author) {
	return view('posts', [
		'title' => 'Author Posts',
		'posts' => $author->posts,
	]);
});
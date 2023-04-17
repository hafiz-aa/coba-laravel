<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/blog', function () {
	
$blog_posts = [
		[
		"title" => "Judul pertama",
		"slug" => "judul-pertama",
		"author" => "Muhammad Hafiz",
		"body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam quod, facere suscipit, voluptas quas eos illum sint nulla ut sunt ipsum error delectus labore est repellendus doloribus, vitae officia earum perferendis fugiat architecto mollitia voluptatum. Placeat commodi ut illo deleniti obcaecati quos velit. Nobis natus saepe fugiat sequi vel quasi incidunt commodi autem eligendi voluptates neque dicta a cumque odio, fuga sunt molestias, at esse pariatur laborum dolorem ipsam? Quidem quae perspiciatis, totam odio atque delectus minus soluta optio laborum!"
		],
		[
		"title" => "Judul kedua",
		"slug" => "judul-kedua",
		"author" => "Isla Barley",
		"body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ipsam pariatur tenetur perferendis saepe voluptatum blanditiis quidem beatae, odio eaque ratione quod, omnis rem non cum natus architecto. Et, sit perferendis aut voluptatem vitae blanditiis reprehenderit iste? Laborum, perferendis libero vero aut ipsam quos sequi dicta laudantium magnam tenetur, pariatur debitis veniam, cupiditate asperiores officiis sapiente at nesciunt deserunt inventore? Reiciendis labore nesciunt esse commodi fuga odit nemo quis nobis vitae error asperiores, beatae necessitatibus repudiandae fugit voluptas molestiae, eligendi eaque nam saepe id quasi. Cumque modi veniam ratione voluptatum. Molestias dolores, facere ipsum excepturi quibusdam officia fugit veniam quam qui accusamus obcaecati, assumenda iusto quidem quisquam tenetur debitis corporis, beatae necessitatibus. Dicta eos aliquam corporis maiores, necessitatibus recusandae eum sapiente expedita adipisci quos eius quia totam sed, veniam dolores!"
		],
	];

	
    return view('posts', [
			"title" => 'Posts',
			"posts" => $blog_posts,
		]);
});

// Single page
Route::get('posts/{slug}', function ($slug) {
	$blog_posts = [
		[
		"title" => "Judul pertama",
		"slug" => "judul-pertama",
		"author" => "Muhammad Hafiz",
		"body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam quod, facere suscipit, voluptas quas eos illum sint nulla ut sunt ipsum error delectus labore est repellendus doloribus, vitae officia earum perferendis fugiat architecto mollitia voluptatum. Placeat commodi ut illo deleniti obcaecati quos velit. Nobis natus saepe fugiat sequi vel quasi incidunt commodi autem eligendi voluptates neque dicta a cumque odio, fuga sunt molestias, at esse pariatur laborum dolorem ipsam? Quidem quae perspiciatis, totam odio atque delectus minus soluta optio laborum!"
		],
		[
		"title" => "Judul kedua",
		"slug" => "judul-kedua",
		"author" => "Isla Barley",
		"body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ipsam pariatur tenetur perferendis saepe voluptatum blanditiis quidem beatae, odio eaque ratione quod, omnis rem non cum natus architecto. Et, sit perferendis aut voluptatem vitae blanditiis reprehenderit iste? Laborum, perferendis libero vero aut ipsam quos sequi dicta laudantium magnam tenetur, pariatur debitis veniam, cupiditate asperiores officiis sapiente at nesciunt deserunt inventore? Reiciendis labore nesciunt esse commodi fuga odit nemo quis nobis vitae error asperiores, beatae necessitatibus repudiandae fugit voluptas molestiae, eligendi eaque nam saepe id quasi. Cumque modi veniam ratione voluptatum. Molestias dolores, facere ipsum excepturi quibusdam officia fugit veniam quam qui accusamus obcaecati, assumenda iusto quidem quisquam tenetur debitis corporis, beatae necessitatibus. Dicta eos aliquam corporis maiores, necessitatibus recusandae eum sapiente expedita adipisci quos eius quia totam sed, veniam dolores!"
		],
	];

	$new_post = [];
	foreach($blog_posts as $post){
		if($post["slug"] === $slug){
			$new_post = $post;
		}
	}
		return view('post', [
			"title" => "Single post",
			"post" => $new_post
		]);
});
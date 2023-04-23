<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
					'name' => 'Muhammad Hafiz',
					'email' => 'mhafiz.aa@gmail.com',
					'password' => bcrypt('12345')
				]);
        User::create([
					'name' => 'Annisa Rahmat',
					'email' => 'annisa@gmail.com',
					'password' => bcrypt('12345')
				]);

				Category::create([
					'name' => 'Web Programming',
					'slug' => 'web-programming'
				]);
				Category::create([
					'name' => 'Data Science',
					'slug' => 'data-science'
				]);
				Category::create([
					'name' => 'Self Development',
					'slug' => 'self-development'
				]);

				Post::create([
					'title' => 'Judul Pertama',
					'slug' => 'judul-pertama',
					'category_id' => 1,
					'user_id' => 1,
					'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, maxime. Mollitia ipsum odio debitis,',
					'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, maxime. Mollitia ipsum odio debitis, labore eligendi dicta laboriosam sint nemo unde earum provident eaque iusto atque accusantium adipisci ut fuga eius. Veritatis, tempora facere. Autem, iure! Tenetur voluptatem illum similique repellendus mollitia, itaque qui.</p><p>Soluta similique, iusto eveniet inventore dolore non porro quos ex adipisci omnis, quae ducimus voluptates. Est voluptates soluta, corporis vero obcaecati explicabo earum cum exercitationem quo dicta dolorem et molestias eligendi rem optio placeat asperiores dolor delectus reprehenderit velit facere repellat nihil. Magnam fuga, deleniti corrupti, ullam iure debitis ipsam quos voluptates, veniam explicabo impedit!</p><p>Tempore aperiam amet quis placeat, fuga nesciunt maxime recusandae neque magni, vitae, earum est ad sunt porro saepe. Harum ullam dolorum beatae accusantium quisquam, eaque ab error architecto nostrum perspiciatis. Dolorum quas sequi enim! Necessitatibus ex harum magnam nam omnis aperiam.</p>']);
				Post::create([
					'title' => 'Judul Kedua',
					'slug' => 'judul-kedua',
					'category_id' => 3,
					'user_id' => 2,
					'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, maxime. Mollitia ipsum odio debitis,',
					'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, maxime. Mollitia ipsum odio debitis, labore eligendi dicta laboriosam sint nemo unde earum provident eaque iusto atque accusantium adipisci ut fuga eius. Veritatis, tempora facere. Autem, iure! Tenetur voluptatem illum similique repellendus mollitia, itaque qui.</p><p>Soluta similique, iusto eveniet inventore dolore non porro quos ex adipisci omnis, quae ducimus voluptates. Est voluptates soluta, corporis vero obcaecati explicabo earum cum exercitationem quo dicta dolorem et molestias eligendi rem optio placeat asperiores dolor delectus reprehenderit velit facere repellat nihil. Magnam fuga, deleniti corrupti, ullam iure debitis ipsam quos voluptates, veniam explicabo impedit!</p><p>Tempore aperiam amet quis placeat, fuga nesciunt maxime recusandae neque magni, vitae, earum est ad sunt porro saepe. Harum ullam dolorum beatae accusantium quisquam, eaque ab error architecto nostrum perspiciatis. Dolorum quas sequi enim! Necessitatibus ex harum magnam nam omnis aperiam.</p>']);
				Post::create([
					'title' => 'Judul Ketiga',
					'slug' => 'judul-ketiga',
					'category_id' => 1,
					'user_id' => 1,
					'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, maxime. Mollitia ipsum odio debitis,',
					'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, maxime. Mollitia ipsum odio debitis, labore eligendi dicta laboriosam sint nemo unde earum provident eaque iusto atque accusantium adipisci ut fuga eius. Veritatis, tempora facere. Autem, iure! Tenetur voluptatem illum similique repellendus mollitia, itaque qui.</p><p>Soluta similique, iusto eveniet inventore dolore non porro quos ex adipisci omnis, quae ducimus voluptates. Est voluptates soluta, corporis vero obcaecati explicabo earum cum exercitationem quo dicta dolorem et molestias eligendi rem optio placeat asperiores dolor delectus reprehenderit velit facere repellat nihil. Magnam fuga, deleniti corrupti, ullam iure debitis ipsam quos voluptates, veniam explicabo impedit!</p><p>Tempore aperiam amet quis placeat, fuga nesciunt maxime recusandae neque magni, vitae, earum est ad sunt porro saepe. Harum ullam dolorum beatae accusantium quisquam, eaque ab error architecto nostrum perspiciatis. Dolorum quas sequi enim! Necessitatibus ex harum magnam nam omnis aperiam.</p>']);

					
    }
}

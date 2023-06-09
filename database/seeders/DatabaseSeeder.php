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
				User::create([
					'name' => 'Muhammad Hafiz',
					'username' => 'hafiz',
					'email' => 'mhafiz.aa@gmail.com',
					'password' => bcrypt('123456'),
				]);

        User::factory(5)->create();

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

				Post::factory(20)->create();
					
    }
}

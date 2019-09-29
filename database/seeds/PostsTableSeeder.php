<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Truncate exisiting records to start from scratch
         * 
         */
        Post::truncate();

        $faker = \Faker\Factory::create();

        /**
         * Create posts in the database
         */
        for($i = 0; $i < 50; $i++)
        {
            Post::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }
    }
}

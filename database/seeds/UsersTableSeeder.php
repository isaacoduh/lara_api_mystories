<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Clear users table 
         */
        User::truncate();

        $faker = \Faker\Factory::create();

        /**
         * Create same password for all users,
         * Hash the password as well
         */
        $password = Hash::make('password');

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@test.com',
            'password' => $password
        ]);

        /**
         * Generate users for the demo
         */
        for($i = 0; $i < 5; $i++){
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
            ]);
        }
    }
}

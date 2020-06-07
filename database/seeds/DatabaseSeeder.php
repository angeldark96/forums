<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Forums::class, 100000)->create();

        // $this->call(UsersTableSeeder::class);
    }
}
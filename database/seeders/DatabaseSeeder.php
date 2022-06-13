<?php

namespace Database\Seeders;

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
        $this->call(GenreSeeder::class);
        $this->call(PegiSeeder::class);
        $this->call(SessionsSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(MoviesSeeder::class);
        $this->call(UserSeeder::class);

        // \App\Models\User::factory(10)->create();
    }
}


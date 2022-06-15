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
    
        //Insere Genêros dos filmes na tabela de genres
        $this->call(GenreSeeder::class);
        //Insere Classificações de Idade na tabela de pegis
        $this->call(PegiSeeder::class);
        //Insere Horarios fixados de sessões tabela de sessions
        $this->call(SessionsSeeder::class);
        //Insere Salas na tabela de Rooms
        $this->call(RoomSeeder::class);
        //Insere filmes na tabela de Movies
        $this->call(MoviesSeeder::class);
        //Insere usuario base Admin
        $this->call(UserSeeder::class);

        // \App\Models\User::factory(10)->create();
    }
}


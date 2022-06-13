<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['name' => 'Animação'],
            ['name' => 'Aventura'],
            ['name' => 'Ação'],
            ['name' => 'Comédia'],
            ['name' => 'Comédia dramática'],
            ['name' => 'Drama'],
            ['name' => 'Ficção Científica'],
            ['name' => 'Romance'],
            ['name' => 'Suspense'],
            ['name' => 'Terror'],
        ]);
    }
}

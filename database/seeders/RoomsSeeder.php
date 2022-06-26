<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            ['name' => 'Sala 01','capacity' => 220],
            ['name' => 'Sala 02','capacity' => 210],
            ['name' => 'Sala 03','capacity' => 180],
            ['name' => 'Sala 04','capacity' => 180],
            ['name' => 'Sala 05','capacity' => 180],
            ['name' => 'Sala 06','capacity' => 250],
            ['name' => 'Sala 07','capacity' => 200],
            ['name' => 'Sala 08','capacity' => 210],
        ]);
    }
}

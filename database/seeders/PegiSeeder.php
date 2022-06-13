<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegis')->insert([
            ['name' => '+3'],
            ['name' => '+7'],
            ['name' => '+12'],
            ['name' => '+16'],
            ['name' => '+18']
        ]);
    }
}

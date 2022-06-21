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
            ['name' => 'Livre'],
            ['name' => '+10'],
            ['name' => '+12'],
            ['name' => '+14'],
            ['name' => '+16'],
            ['name' => '+18'],
        ]);
    }
}

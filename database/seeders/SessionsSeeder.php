<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SessionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sessions')->insert([
            ['session_hour' => '10:00:00'],
            ['session_hour' => '12:10:00'],
            ['session_hour' => '14:20:00'],
            ['session_hour' => '16:30:00'],
            ['session_hour' => '18:40:00'],
            ['session_hour' => '20:50:00'],
        ]);
    }
}

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
            ['session_hour' => '11:00:00'],
            ['session_hour' => '12:00:00'],
            ['session_hour' => '13:00:00'],
            ['session_hour' => '14:00:00'],
            ['session_hour' => '15:00:00'],
            ['session_hour' => '16:00:00'],
            ['session_hour' => '17:00:00'],
            ['session_hour' => '18:00:00'],
            ['session_hour' => '19:10:00'],
            ['session_hour' => '20:20:00'],
            ['session_hour' => '21:00:00'],
            ['session_hour' => '22:00:00'],
            ['session_hour' => '23:59:59'],
        ]);
    }
}

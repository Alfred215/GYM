<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Session;
use DB;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Session::create([
            'date_session' => '2022-01-30',
            'start_time' => '17:00',
            'end_time' => '19:00',
        ]);
    }
}

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
            'id_activity' => '1',
            'date_session' => 'LWF',
            'start_time' => '17:00',
            'end_time' => '19:00',
        ]);
    }
}

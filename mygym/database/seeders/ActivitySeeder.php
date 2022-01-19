<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;
use DB;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::create([
            'name' => 'Yoga',
            'days' => '2',
            'numsession' => '4',
            'schedule' => '10:00',
            'duration' => '2 horas',
            'nummembers' => '17'
        ]);
    }
}

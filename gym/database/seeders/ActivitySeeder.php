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
            'descrip' => 'relax',
            'duration' => '120m',
            'nummembers' => '17'
        ]);
    }
}

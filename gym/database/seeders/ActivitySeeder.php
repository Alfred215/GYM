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
            'descrip' => 'Relax',
            'duration' => '120',
            'nummembers' => '20'
        ]);

        Activity::create([
            'name' => 'Kickboxing',
            'descrip' => 'Pelear',
            'duration' => '120',
            'nummembers' => '30'
        ]);

        Activity::create([
            'name' => 'Workout',
            'descrip' => 'Resistente',
            'duration' => '120',
            'nummembers' => '30'
        ]);
    }
}

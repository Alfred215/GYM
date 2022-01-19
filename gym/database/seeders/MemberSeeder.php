<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;
use DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::create([
            'dni' => '12345678A',
            'name' => 'Jorge Campos Lopez',
            'weight' => '79',
            'height' => '1,85',
            'birthday' => '2000/01/01',
            'sex' => 'Masculino'
        ]);
    }
}

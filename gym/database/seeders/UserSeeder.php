<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jorge Campos Lopez',
            'dni' => '12345678A',
            'email' => 'alfredo@gmail.com',
            'password' => '123456789',
            'weight' => '79',
            'height' => '1,85',
            'birthday' => '2000/01/01',
            'sex' => 'Masculino'
        ]);
    }
}

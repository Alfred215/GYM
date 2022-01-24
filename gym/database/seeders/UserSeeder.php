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
            'name' => 'Alfredo García',
            'dni' => '12345678A',
            'email' => 'alfredo@gmail.com',
            'password' => bcrypt('123456789'),
            'weight' => '79',
            'height' => '1,85',
            'birthday' => '2000/01/01',
            'sex' => 'Masculino',
            'role_id' => 3
        ]);

        User::create([
            'name' => 'Frodo García',
            'dni' => '12345678B',
            'email' => 'frodo@gmail.com',
            'password' => bcrypt('123456789'),
            'weight' => '79',
            'height' => '1,85',
            'birthday' => '2000/01/01',
            'sex' => 'Masculino',
            'role_id' => 2
        ]);

        User::create([
            'name' => 'Fredo García',
            'dni' => '12345678C',
            'email' => 'fredo@gmail.com',
            'password' => bcrypt('123456789'),
            'weight' => '79',
            'height' => '1,85',
            'birthday' => '2000/01/01',
            'sex' => 'Masculino',
            'role_id' => 1
        ]);
    }
}

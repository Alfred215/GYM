<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'id' => 1,
            'name' => 'socio'
        ]);

        Role::create([
            'id' => 2,
            'name' => 'entrenador'
        ]);

        Role::create([
            'id' => 3,
            'name' => 'administrador'
        ]);
    }
}

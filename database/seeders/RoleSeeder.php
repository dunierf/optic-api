<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert([
            [
                'id'            => 1,
                'name'          => 'Admin',
                'name_es'       => 'Admin',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'id'            => 2,
                'name'          => 'User',
                'name_es'       => 'Usuario',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'id'            => 3,
                'name'          => 'Dispatcher',
                'name_es'       => 'Despachador',
                'created_at'    => now(),
                'updated_at'    => now()
            ]
        ]);
    }
}

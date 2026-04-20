<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::insert([
            [
                'id'            => 1,
                'name'          => 'Glasses',
                'name_es'       => 'Espejuelos',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'id'            => 2,
                'name'          => 'Frame',
                'name_es'       => 'Armadura',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'id'            => 3,
                'name'          => 'Filter',
                'name_es'       => 'Filtro',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'id'            => 4,
                'name'          => 'Accessories',
                'name_es'       => 'Accesorios',
                'created_at'    => now(),
                'updated_at'    => now()
            ]
        ]);
    }
}

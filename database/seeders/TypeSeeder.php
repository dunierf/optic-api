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
                "id"            => 1,
                "name"          => "Customized glasses",
                "name_es"       => "Espejuelos armados",
                "created_at"    => now()
            ],
            [
                "id"            => 2,
                "name"          => "Glasses",
                "name_es"       => "Espejuelos",
                "created_at"    => now()
            ],
            [
                "id"            => 3,
                "name"          => "Frames",
                "name_es"       => "Armaduras",
                "created_at"    => now()
            ],
            [
                "id"            => 4,
                "name"          => "Lenses",
                "name_es"       => "Cristales",
                "created_at"    => now()
            ],
            [
                "id"            => 5,
                "name"          => "Accessories",
                "name_es"       => "Accesrios",
                "created_at"    => now()
            ]
        ]);
    }
}

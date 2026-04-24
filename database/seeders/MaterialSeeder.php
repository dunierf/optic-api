<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Material;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Material::insert([
            [
                "id"            => 1,
                "name"          => "Acetate",
                "name_es"       => "Acetate",
                "created_at"    => now()
            ],
            [
                "id"            => 2,
                "name"          => "Cellulose acetate",
                "name_es"       => "Acetato de celulosa",
                "created_at"    => now()
            ],
            [
                "id"            => 3,
                "name"          => "Propionate",
                "name_es"       => "Propionato",
                "created_at"    => now()
            ],
            [
                "id"            => 4,
                "name"          => "Nylon",
                "name_es"       => "Nailon",
                "created_at"    => now()
            ],
            [
                "id"            => 5,
                "name"          => "Polycarbonate",
                "name_es"       => "Policarbonato",
                "created_at"    => now()
            ],
            [
                "id"            => 6,
                "name"          => "TR-90",
                "name_es"       => "TR-90",
                "created_at"    => now()
            ],
            [
                "id"            => 7,
                "name"          => "Stainless steel",
                "name_es"       => "Acero inoxidable",
                "created_at"    => now()
            ],
            [
                "id"            => 8,
                "name"          => "Titanium",
                "name_es"       => "Titanio",
                "created_at"    => now()
            ],
            [
                "id"            => 9,
                "name"          => "Titanium alloy",
                "name_es"       => "Aleación de titanio",
                "created_at"    => now()
            ],
            [
                "id"            => 10,
                "name"          => "Aluminum",
                "name_es"       => "Aluminio",
                "created_at"    => now()
            ],
            [
                "id"            => 11,
                "name"          => "Monel",
                "name_es"       => "Monel",
                "created_at"    => now()
            ],
            [
                "id"            => 12,
                "name"          => "Beryllium",
                "name_es"       => "Berilio",
                "created_at"    => now()
            ],
            [
                "id"            => 13,
                "name"          => "Carbon fiber",
                "name_es"       => "Fibra de carbono",
                "created_at"    => now()
            ],
            [
                "id"            => 14,
                "name"          => "Wood",
                "name_es"       => "Madera",
                "created_at"    => now()
            ],
            [
                "id"            => 15,
                "name"          => "Bamboo",
                "name_es"       => "Bambú",
                "created_at"    => now()
            ],
            [
                "id"            => 16,
                "name"          => "Combination frame",
                "name_es"       => "Armadura combinada",
                "created_at"    => now()
            ]
        ]);
    }
}

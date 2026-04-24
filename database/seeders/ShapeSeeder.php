<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shape;

class ShapeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shape::insert([
            [
                "id"            => 1,
                "name"          => "Round",
                "name_es"       => "Redonda",
                "created_at"    => now()
            ],
            [
                "id"            => 2,
                "name"          => "Square",
                "name_es"       => "Cuadrada",
                "created_at"    => now()
            ],
            [
                "id"            => 3,
                "name"          => "Rectangle",
                "name_es"       => "Rectangular",
                "created_at"    => now()
            ],
            [
                "id"            => 4,
                "name"          => "Oval",
                "name_es"       => "Ovalada",
                "created_at"    => now()
            ],
            [
                "id"            => 5,
                "name"          => "Cat-eye",
                "name_es"       => "Ojo de gato",
                "created_at"    => now()
            ],
            [
                "id"            => 6,
                "name"          => "Aviator",
                "name_es"       => "Aviador",
                "created_at"    => now()
            ],
            [
                "id"            => 7,
                "name"          => "Geometric",
                "name_es"       => "Geométrica",
                "created_at"    => now()
            ],
            [
                "id"            => 8,
                "name"          => "Browline",
                "name_es"       => "Ceja marcada",
                "created_at"    => now()
            ],
            [
                "id"            => 9,
                "name"          => "Butterfly",
                "name_es"       => "Mariposa",
                "created_at"    => now()
            ],
            [
                "id"            => 10,
                "name"          => "Irregular / Asymmetric",
                "name_es"       => "Irregular / asimétrica",
                "created_at"    => now()
            ],
            [
                "id"            => 11,
                "name"          => "Rimless",
                "name_es"       => "Al aire",
                "created_at"    => now()
            ],
            [
                "id"            => 12,
                "name"          => "Semi-rimless",
                "name_es"       => "Semi al aire",
                "created_at"    => now()
            ]
        ]);
    }
}

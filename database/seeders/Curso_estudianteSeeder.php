<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\inscripcion;
use App\Models\Curso_estudiante;

class Curso_estudianteSeeder extends Seeder
{
 
    public function run(): void
    {
        Curso_estudiante::factory(34)->create();
    }
}

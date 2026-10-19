<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estudiante;


class EstudianteSeeder extends Seeder
{
  
    public function run(): void
    {
        Estudiante::factory(30)->create();
    }
}

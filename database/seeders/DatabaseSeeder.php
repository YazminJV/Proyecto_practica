<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Perfil;
use App\Models\Categoria;
use App\Models\Product;
use App\Models\Curso;
use App\Models\Estudiante;
use App\Models\Curso_estudiante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
       

        $this->call([
            UserSeeder::class,
            PerfilSeeder::class,
            CategoriaSeeder::class,
            ProductSeeder::class,
            CursoSeeder::class,
            EstudianteSeeder::class,
            Curso_estudianteSeeder::class
        ]);
    }
}

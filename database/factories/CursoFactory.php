<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;


class CursoFactory extends Factory
{

    public function definition(): array
    {
        return [
            'nombre_curso'=>fake()->words(1,true),
            'descripcion'=>fake()->sentence(3),
            'precio'=>fake()->randomFloat(2,10,60),
            'estado'=>fake()->randomElement(['activo','inactivo'])
        ];
    }
}

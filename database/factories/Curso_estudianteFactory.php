<?php

namespace Database\Factories;

use App\Models\Curso_estudiante;
use App\Models\Curso;
use App\Models\Estudiante;
use Illuminate\Database\Eloquent\Factories\Factory;


class Curso_estudianteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id_estu'=>Estudiante::inRandomOrder()->first()->id,
            'id_curso'=>Curso::inRandomOrder()->first()->id,
            'inscripcion'=>fake()->randomElement(['Activa', 'Pendiente', 'Cancelada', 'Inactiva']),
            'fecha_inscripcion'=>fake()->date(),
            'progreso'=>fake()->numberBetween(1,100)
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Estudiante;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstudianteFactory extends Factory
{
    
    public function definition(): array
    {
        return [
           'codigo_estudiante'=>fake()->unique()->words(1,true),
           'user_id'=>User::inRandomOrder()->first()->id,
        ];
    }
}

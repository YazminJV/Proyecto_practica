<?php

namespace Database\Factories;

use App\Models\Perfil;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class PerfilFactory extends Factory
{
   
    public function definition(): array
    {
        return [
            'user_id'=>fake()->unique()->numberBetween(1,12),
            'nombre_perfil'=>fake()->userName(),
            'telefono'=>fake()->regexify('[0-9]{8}'),
            'direccion'=>fake()->address(),
            'biografia'=>fake()->text(15),
            'fecha_nacimiento'=>fake()->dateTimeBetween()
        ];
    }
}

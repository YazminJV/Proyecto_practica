<?php

namespace Database\Factories;

use App\Models\Perfil;
use Illuminate\Database\Eloquent\Factories\Factory;


class PerfilFactory extends Factory
{
   
    public function definition(): array
    {
        return [
            'user_id'=>User::inRamdoOrder()->first()->id,
            'nombre_perfil'=>fake()->userName(),
            'telefono'=>fake()->regexify('[0-9]{8}'),
            'direccion'=>fake()->address(),
            'biografia'=>fake()->paragraph(),
            'foto'=>
            'fecha_nacimiento'
        ];
    }
}

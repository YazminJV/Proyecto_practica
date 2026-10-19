<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categoria;


class ProductFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            'name'=>fake()->words(2,true),
            'price'=>fake()->randomFloat(2,10,200),
            'stock'=>fake()->numberBetween(1,50),
            'id_categoria'=>Categoria::inRandomOrder()->first()->id,
            'descripcion'=>fake()->sentence()
        ];
    }
}

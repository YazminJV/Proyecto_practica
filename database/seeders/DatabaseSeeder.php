<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Perfil;
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
            PerfilSeeder::class
        ]);
    }
}

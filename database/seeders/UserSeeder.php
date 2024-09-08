<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Cria um administrador
        User::factory()->admin()->create([
            'name' => 'Administrador',
            'email' => 'admin@banco.com',
        ]);

        // Cria um gerente
        User::factory()->manager()->create([
            'name' => 'Gerente',
            'email' => 'gerente@banco.com',
        ]);

        // Cria usuários comuns
        User::factory(10)->create(); // cria 10 usuários comuns aleatórios
    }
}


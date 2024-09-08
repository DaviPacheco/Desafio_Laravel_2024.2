<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Account;
use App\Models\User;

class AccountSeeder extends Seeder
{
    public function run()
    {
        // Cria uma conta para cada usuário
        User::all()->each(function ($user) {
            Account::factory()->create([
                'user_id' => $user->id,
            ]);
        });
    }
}


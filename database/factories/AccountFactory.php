<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    protected $model = Account::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), // cria um usuário comum
            'balance' => $this->faker->randomFloat(2, 1000, 100000), // saldo entre R$1.000 e R$100.000
            'account_number' => $this->faker->unique()->bankAccountNumber,
        ];
    }
}


<?php

namespace Database\Factories;

use App\Models\Transaction;
use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    protected $model = Transaction::class;

    public function definition()
    {
        return [
            'account_id' => Account::factory(),
            'amount' => $this->faker->randomFloat(2, 10, 5000), // valor entre R$10 e R$5.000
            'type' => $this->faker->randomElement(['credit', 'debit']),
            'description' => $this->faker->sentence,
        ];
    }
}


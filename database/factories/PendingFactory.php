<?php

namespace Database\Factories;

use App\Models\Pending;
use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

class PendingFactory extends Factory
{
    protected $model = Pending::class;

    public function definition()
    {
        return [
            'account_id' => Account::factory(),
            'amount' => $this->faker->randomFloat(2, 10, 5000), // valor entre R$10 e R$5.000
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
        ];
    }
}


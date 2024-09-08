<?php

namespace Database\Factories;

use App\Models\Loan;
use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoanFactory extends Factory
{
    protected $model = Loan::class;

    public function definition()
    {
        return [
            'account_id' => Account::factory(),
            'amount' => $this->faker->randomFloat(2, 1000, 50000), // valor entre R$1.000 e R$50.000
            'interest_rate' => $this->faker->randomFloat(2, 1, 10), // taxa de juros entre 1% e 10%
            'duration_months' => $this->faker->numberBetween(6, 60), // duração entre 6 e 60 meses
        ];
    }
}


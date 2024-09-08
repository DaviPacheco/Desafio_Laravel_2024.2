<?php
namespace Database\Factories;

use App\Models\DepositWithdrawal;
use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepositWithdrawalFactory extends Factory
{
    protected $model = DepositWithdrawal::class;

    public function definition()
    {
        return [
            'account_id' => Account::factory(),
            'amount' => $this->faker->randomFloat(2, 10, 10000), // valor entre R$10 e R$10.000
            'type' => $this->faker->randomElement(['deposit', 'withdrawal']),
        ];
    }
}

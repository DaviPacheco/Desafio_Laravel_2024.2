<?php
namespace Database\Factories;

use App\Models\Transfer;
use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransferFactory extends Factory
{
    protected $model = Transfer::class;

    public function definition()
    {
        return [
            'from_account_id' => Account::factory(),
            'to_account_id' => Account::factory(),
            'amount' => $this->faker->randomFloat(2, 10, 10000), // valor entre R$10 e R$10.000
        ];
    }
}

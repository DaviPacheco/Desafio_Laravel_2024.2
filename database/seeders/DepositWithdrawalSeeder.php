<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DepositWithdrawal;
use App\Models\Account;

class DepositWithdrawalSeeder extends Seeder
{
    public function run()
    {
        // Cria 10 registros de depósito/saque
        Account::all()->each(function ($account) {
            DepositWithdrawal::factory(3)->create([
                'account_id' => $account->id,
            ]);
        });
    }
}

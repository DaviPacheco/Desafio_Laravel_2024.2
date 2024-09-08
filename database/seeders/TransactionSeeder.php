<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
use App\Models\Account;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        // Cria 5 transações para cada conta existente
        Account::all()->each(function ($account) {
            Transaction::factory(5)->create([
                'account_id' => $account->id,
            ]);
        });
    }
}


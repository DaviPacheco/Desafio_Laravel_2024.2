<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Loan;
use App\Models\Account;

class LoanSeeder extends Seeder
{
    public function run()
    {
        // Cria 3 empréstimos para contas aleatórias
        Account::all()->random(3)->each(function ($account) {
            Loan::factory()->create([
                'account_id' => $account->id,
            ]);
        });
    }
}


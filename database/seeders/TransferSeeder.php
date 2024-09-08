<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transfer;
use App\Models\Account;

class TransferSeeder extends Seeder
{
    public function run()
    {
        // Cria 5 transferências aleatórias entre as contas
        $accounts = Account::all();

        for ($i = 0; $i < 5; $i++) {
            Transfer::factory()->create([
                'from_account_id' => $accounts->random()->id,
                'to_account_id' => $accounts->random()->id,
            ]);
        }
    }
}

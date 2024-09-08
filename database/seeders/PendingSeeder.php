<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pending;
use App\Models\Account;

class PendingSeeder extends Seeder
{
    public function run()
    {
        // Cria 5 registros de pendências para contas
        Account::all()->random(5)->each(function ($account) {
            Pending::factory()->create([
                'account_id' => $account->id,
            ]);
        });
    }
}

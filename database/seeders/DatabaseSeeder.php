<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Chama as seeds individuais
        $this->call([
            UserSeeder::class,
            AccountSeeder::class,
            TransactionSeeder::class,
            TransferSeeder::class,
            LoanSeeder::class,
            DepositWithdrawalSeeder::class,
            PendingSeeder::class,
        ]);
    }
}


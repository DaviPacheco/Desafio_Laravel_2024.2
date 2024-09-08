<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsWithdrawalsTable extends Migration
{
    public function up()
    {
        Schema::create('deposit_withdrawals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_id')->constrained('accounts')->onDelete('cascade');
            $table->decimal('amount', 15, 2);
            $table->enum('type', ['deposit', 'withdrawal']); // Depósito ou retirada
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('deposits_withdrawals');
    }
}
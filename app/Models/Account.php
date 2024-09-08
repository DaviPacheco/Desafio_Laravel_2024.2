<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'balance',
        'account_number',
    ];

    // Relacionamento com o usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relacionamento com transações
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    // Relacionamento com transferências
    public function transfers()
    {
        return $this->hasMany(Transfer::class, 'from_account_id');
    }

    // Relacionamento com empréstimos
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    // Relacionamento com depósitos e retiradas
    public function depositsWithdrawals()
    {
        return $this->hasMany(DepositWithdrawal::class);
    }

    // Relacionamento com transações pendentes
    public function pendings()
    {
        return $this->hasMany(Pending::class);
    }
}
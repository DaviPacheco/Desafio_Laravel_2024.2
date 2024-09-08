<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositWithdrawal extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id',
        'amount',
        'type',
    ];

    // Relacionamento com a conta
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];

    // Relacionamento com usuários
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
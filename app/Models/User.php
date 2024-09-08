<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'phone',
        'birth_date',
        'cpf',
        'role',
        'photo',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'birth_date' => 'date',
    ];

    // Relacionamento com a tabela de contas
    public function accounts()
    {
        return $this->hasMany(Account::class);
    }

    // Verificar se o usuário é admin
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    // Verificar se o usuário é gerente
    public function isManager()
    {
        return $this->role === 'manager';
    }
}

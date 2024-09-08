<?php

namespace Database\Factories;

use App\Models\Manager;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ManagerFactory extends Factory
{
    protected $model = Manager::class;

    public function definition()
    {
        return [
            'user_id' => User::factory()->manager(), // cria um usuário com role de manager
        ];
    }
}

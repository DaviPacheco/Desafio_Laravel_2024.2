<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // senha padrão
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'birth_date' => $this->faker->date(),
            'cpf' => fake()->unique()->numerify('###########'),
            'role' => $this->faker->randomElement(['user', 'manager', 'admin']),
            'photo' => $this->faker->imageUrl(400, 400, 'people'),
            'remember_token' => Str::random(10),
        ];
    }

    // Estado admin
    public function admin()
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => 'admin',
            ];
        });
    }

    // Estado manager
    public function manager()
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => 'manager',
            ];
        });
    }
}

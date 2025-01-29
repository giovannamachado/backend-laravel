<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'nome_completo' => $this->faker->name(),
            'cpf' => $this->faker->numerify('###########'), 
            'email' => $this->faker->unique()->safeEmail(),
            'senha' => bcrypt('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

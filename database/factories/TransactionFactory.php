<?php

namespace database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Transaction;
use app\Models\User;
use app\Models\Category;

class TransactionFactory extends Factory
{
    protected $model = Transaction::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),  // Gera um usuário automaticamente
            'category_id' => Category::factory(), // Gera uma categoria automaticamente
            'tipo' => $this->faker->randomElement(['credit', 'debit']),
            'valor' => $this->faker->randomFloat(2, 10, 1000), // Valores entre 10 e 1000
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

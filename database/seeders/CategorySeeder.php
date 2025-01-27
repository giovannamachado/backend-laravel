<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'nome_category' => 'Categoria Exemplo 1',
        ]);

        Category::create([
            'nome_category' => 'Categoria Exemplo 2',
        ]);

        echo "Category seeded successfully!";
    }
}

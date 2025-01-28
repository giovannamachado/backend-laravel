<?php

namespace Database\Seeders;

use app\Models\Category;
use app\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder{

    public function run()
    {
        $category1 = Category::create(['nome_category' => 'Categoria 1']);
        $category2 = Category::create(['nome_category' => 'Categoria 2']);
        
        Transaction::create([
            'category_id' => $category1->id,
            'amount' => 100.00,
            
        ]);

        Transaction::create([
            'category_id' => $category1->id,
            'amount' => 200.00,
            
        ]);

        Transaction::create([
            'category_id' => $category2->id,
            'amount' => 150.00,
            
        ]);

        Transaction::create([
            'category_id' => $category2->id,
            'amount' => 300.00,
        
        ]);
    }
}
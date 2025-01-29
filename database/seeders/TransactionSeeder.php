<?php

namespace database\seeders;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use app\Models\Transaction;
use app\Models\User;
use app\Models\Category;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        Transaction::factory()->count(10)->create(); 
    }
}

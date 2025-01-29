<?php

namespace database\seeders;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use database\factories\CategoryFactory;
use app\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::factory()->count(3)->create(); 
    }
}
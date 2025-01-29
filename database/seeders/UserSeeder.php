<?php

namespace database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use app\Models\User;

class UserSeeder extends Seeder
{
    
    public function run(): void
    {
        User::factory()->count(5)->create();
    }
}

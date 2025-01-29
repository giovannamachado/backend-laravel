<?php

namespace database\seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            TransactionSeeder::class,
        ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prodruto;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
           //\App\Models\User::factory(30)->create();
             \App\Models\Produto::factory(20)->create();
    }
}

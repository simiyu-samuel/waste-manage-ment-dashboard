<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Vehicle::factory(5)->create();
        \App\Models\Route::factory(3)->create();
        \App\Models\WasteCollection::factory(10)->create();
    }    
}

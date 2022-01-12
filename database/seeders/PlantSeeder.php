<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Plant::factory()->count(5)->create(); 
    }
}

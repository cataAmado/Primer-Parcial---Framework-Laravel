<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Watch;
use Database\Factories\WatchFactory;

class WatchTableSeeder extends Seeder
{
    public function run()
    {
        Watch::factory()->count(100)->create();
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Season;

class SeasonSeeder extends Seeder
{
    public function run(): void
    {
        Season::firstOrCreate(['number' => 1]);
        Season::firstOrCreate(['number' => 2]);
    }
}

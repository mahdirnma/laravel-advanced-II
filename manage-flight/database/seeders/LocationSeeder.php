<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::create([
            'city' => 'hamedan',
            'country' => 'iran',
            'airport' => 'mehrabad',
        ]);
        Location::create([
            'city' => 'tehran',
            'country' => 'iran',
            'airport' => 'emam',
        ]);
    }
}

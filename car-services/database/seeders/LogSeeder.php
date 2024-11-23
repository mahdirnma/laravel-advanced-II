<?php

namespace Database\Seeders;

use App\Models\Log;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Log::create([
            'vehicle_id' => '1',
            'km' => '25000',
        ]);
        Log::create([
            'vehicle_id' => '1',
            'km' => '30000',
        ]);
        Log::create([
            'vehicle_id' => '2',
            'km' => '100000',
        ]);
        Log::create([
            'vehicle_id' => '3',
            'km' => '5000',
        ]);

    }
}

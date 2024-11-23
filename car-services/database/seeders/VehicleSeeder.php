<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicle::create([
            'name' => 'BMW X3',
            'user_id' => 1,
        ]);
        Vehicle::create([
            'name' => '206',
            'user_id' => 1,
        ]);
        Vehicle::create([
            'name' => 'BENZ C CLASS',
            'user_id' => 2,
        ]);

    }
}

<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'title' => 'engine oil check',
            'description' => 'check and change engine oil if it is needed',
            'km' => 5000,
        ]);
        Service::create([
            'title' => 'timing belt check',
            'description' => 'check and change timing belt oil if it is needed',
            'km' => 40000,
        ]);
    }
}

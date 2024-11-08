<?php

namespace Database\Seeders;

use App\Models\Subcription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubcriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subcription::create([
            'title' => 'lose weight',
            'description' => 'lorem ipsum dolor sit amet',
            'breakfast'=>'bread',
            'lunch'=>'egg',
            'dinner'=>'rice',
            'user_id' => '1',
        ]);
        Subcription::create([
            'title' => 'gain weight',
            'description' => 'lorem ipsum dolor sit amet',
            'breakfast'=>'2bread',
            'lunch'=>'3egg',
            'dinner'=>'kebab',
            'user_id' => '2',
        ]);

    }
}

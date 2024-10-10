<?php

namespace Database\Seeders;

use App\Models\Ingrediant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngrediantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ingrediant::create([
            'title' => 'pizza_ingradiants',
            'description' => 'tomato-cheese-mushroom',
            'price' => '90000',
            'product_id' => '1',
        ]);

    }
}

<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Product::create([
             'title' => 'pizza',
             'description' => 'lorem ipsum',
             'price' => '350000',
             'profit' => '50000',
         ]);

    }
}

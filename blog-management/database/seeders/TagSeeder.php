<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create([
            'title' => '#business',
        ]);
        Tag::create([
            'title' => '#finantial',
        ]);
        Tag::create([
            'title' => '#science',
        ]);

    }
}

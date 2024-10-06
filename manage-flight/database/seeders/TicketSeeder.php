<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ticket::create([
            'type' => 'economy',
            'airline' => 'turkish',
            'seat' => '13312',
            'time' => '2023-09-08 03:13:10',
            'location_id' => '1',
            'user_id' => '1',
        ]);
        Ticket::create([
            'type' => 'first class',
            'airline' => 'turkish',
            'seat' => '15512',
            'time' => '2021-10-05 06:13:10',
            'location_id' => '2',
            'user_id' => '2',
        ]);

    }
}

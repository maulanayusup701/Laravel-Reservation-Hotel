<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Room::create([
            'no_room' => 1,
            'description' => 'Standard Room',
            'price' => 100,
            'image' => 'https://images.pexels.com/photos/2121121/pexels-photo-2121121.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'status' => 'available',
            'facilities' => 'wifi, television, air conditioning',
        ]);
    }
}

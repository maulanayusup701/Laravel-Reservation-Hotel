<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Facility::create([
            'facility_name' => 'Hotel',
            'facility_type' => 'Hotel',
            'facilities' => 'wifi',
        ]);

        Facility::create([
            'facility_name' => 'Room',
            'facility_type' => 'Big',
            'facilities' => 'wifi, television, air conditioning',
        ]);

        Facility::create([
            'facility_name' => 'Room',
            'facility_type' => 'Medium',
            'facilities' => 'wifi, television',
        ]);

        Facility::create([
            'facility_name' => 'Room',
            'facility_type' => 'Standard',
            'facilities' => 'wifi',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\State;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            'Maharashtra' => ['Mumbai', 'Pune'],
            'Gujarat' => ['Ahmedabad', 'Surat', 'Vadodara']
        ];
    
        foreach ($cities as $state => $cityList) {
            $stateId = State::where('name', $state)->first()->id;
    
            foreach ($cityList as $city) {
                City::create([
                    'name' => $city,
                    'state_id' => $stateId,
                ]);
            }
        }
    }
}

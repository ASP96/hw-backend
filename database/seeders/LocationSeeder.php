<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::factory(10)->create()
        ->each(function($location) {
            // print_r($location);
            $location->children()->saveMany(
                Location::factory(rand(0, 5))
                    ->create()
                    ->each(function($location_level2){
                        $location_level2->children()->saveMany(
                            Location::factory(rand(0, 4))
                            ->make()
                        );
                    })
            );
        });
    }
}

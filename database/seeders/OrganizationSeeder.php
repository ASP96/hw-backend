<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Organization;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Organization::factory()->count(30)->create()
        ->each(function($org){
            $org->children()->saveMany(
                Organization::factory()->count(4)->make()
            );
        });
    }
}

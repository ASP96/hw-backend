<?php

namespace Database\Seeders;

use App\Models\Profilactica;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilacticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profilactica::factory(5)
            ->create();
    }
}

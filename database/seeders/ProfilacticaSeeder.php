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
        $profilactics = [
            ['name' => 'Ежемесячное', 'name_short' => 'ТО-1', 'name_full' => null],
            
            ['name' => 'Квартальное', 'name_short' => 'КВ', 'name_full' => null],
            ['name' => 'Годовое', 'name_short' => 'ТО-2', 'name_full' => null],
        ];
        
        foreach ($profilactics as $item){
            Profilactica::create($item);
        }
        
    }
}

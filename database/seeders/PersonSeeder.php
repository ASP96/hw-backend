<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        Person::factory(4)->create();
            // ->each(function($person){
            //     $person->children()->save(
            //         if ($person->gender = 'male')
            //         {
            //             Person::factory()
            //             ->gender('male')
            //             ->mother_id(person)
            //             ->make()
            //         }
                    
            //     );
            //     $person->children()->save(
            //         Person::factory()->gender('female')->make()
            //     );
            // });

    }
}

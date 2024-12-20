<?php

namespace Database\Seeders;

use Database\Factories\PersonFactory;
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
        // Person::factory(1)->create();

        // dd((new PersonFactory())->gender('female')->make());


        Person::factory(count: 30)
            ->for(
                Person::factory()->gender('female'),
                'mother'
            )
            ->for(
                Person::factory()->gender('male'),
                'father'
            )
            ->create();
                // $person->has(
                //     Person::factory()->gender('male')->make()
                //     , 'father'
                // );
            

                /*
                if ($person->gender == "male")
                {
                    $person->has(
                        Person::factory(1),


                    
                )



                $child1 = Person::factory()
                ->gender('male')
                // ->mother_id($person)
                ->make();

                // $person->children()->save();
                if ($person->gender = 'male')
                {
                    $child1->forFather(person);
                }
                if ($person->gender = 'female')
                {
                    $child1->forMother(person);
                }
                
                /*
                // $person->children()->save(
                //     Person::factory()->gender('female')->make()
                // );
            });


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

            */
    }
}

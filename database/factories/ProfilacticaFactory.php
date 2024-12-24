<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profilactica>
 */
class ProfilacticaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->word();
        return [
            'name' => $name,
            'name_short' => mb_substr($name, 0, 2),
            'name_full' => $name ." full_name"
        ];
    }
}

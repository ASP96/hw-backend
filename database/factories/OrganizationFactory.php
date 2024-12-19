<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrganizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $company = $this->faker->company();

        return [
            'name' => mb_substr($company, 0, 
            max(ceil(mb_strlen($company)*0.8), 10)),
            'name_full' => $company
        ];
    }
}

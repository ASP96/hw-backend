<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Phone>
 */
class PhoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $phone = $this->faker->phoneNumber;
        
        return [
            'phone' => $phone,
            'name' => $this->faker->title,
            'digits' => preg_replace('/[^\d]/', '', $phone)
        ];
    }
}

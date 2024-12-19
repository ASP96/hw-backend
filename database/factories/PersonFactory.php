<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PersonFactory extends Factory
{

    private $gender = null;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        if (!$this->gender)
            $gender = fake()->randomElement(['male', 'female']);

        return [
            "name"=> fake()->firstName($gender),
            "middlename" => fake()->middleName($gender),
            "lastname" => fake()->lastName($gender),
            "gender" => $gender,
            "birthdate" => fake()->date(),
        ];
    }

    /**
     * Summary of gender
     * @param mixed $gender
     * @throws \DomainException
     * @return static
     */
    public function gender($gender)
    {
        if (!in_array($gender, ['male', 'female'])) {
            throw new \DomainException('Error gender');
        }
        
        return $this->state(fn (array $attributes) => [
            'gender' => $gender
        ]);
    }

}

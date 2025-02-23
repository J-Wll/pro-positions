<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "employer_id" => Employer::factory(),
            "title" => fake()->jobTitle(),
            "salary" => fake()->randomElement(["£30,000 GBP", "£40,000 GBP", "£50,000 GBP", "£90,000 GBP"]),
            "location" => "Remote",
            "type" => fake()->randomElement(["Full Time", "Part Time"]),
            "url" => fake()->url(),
            "featured" => false,
        ];
    }
}

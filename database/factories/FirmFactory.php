<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FirmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'team_id' => 1,
            'name' => $this->faker->company,
            'status' => 'Active',
            'description' => $this->faker->words(6,true),
            'city' => $this->faker->city,
            'province' => $this->faker->word,
            'country' => $this->faker->country,
            'company_website' => $this->faker->url,
            'company_website_verified' => 1,
            'company_linkedin' => $this->faker->url,
            'company_linkedin_verified' => 1,
            'company_phone' => $this->faker->phoneNumber,
            'employee_size' => '10 to 19',
            'year_founded' => 2000,
            'location_count' => 1
        ];
    }
}

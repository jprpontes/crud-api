<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'           => $this->faker->name,
            'email'          => $this->faker->email,
            'phone_number'   => str_replace(['(', ')', '-', ' '], '', $this->faker->phoneNumber),
            'zip_code'       => str_replace('-', '', $this->faker->postcode),
            'address'        => $this->faker->streetName,
            'address_number' => $this->faker->buildingNumber,
            'neighborhood'   => 'Centro',
            'state'          => $this->faker->stateAbbr,
            'city'           => $this->faker->city,
        ];
    }
}

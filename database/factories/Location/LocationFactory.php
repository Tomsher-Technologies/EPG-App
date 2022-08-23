<?php

namespace Database\Factories\Location;

use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'loc_id' => 'LOC-' . rand(10, 100),
            'name' => $this->faker->company(),
            'status' => rand(0, 1),
        ];
    }
}

<?php

namespace Database\Factories\Member;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'member_id' => rand(1, 35),
            'location_id' => rand(1, 15),
            'receptionist_id' => 1,
            'points' => rand(10, 150),
        ];
    }
}

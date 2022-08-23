<?php

namespace Database\Factories\Member;

use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cus_id' => 'CUS-' . rand(10, 200),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'location' => $this->faker->country(),
            'last_used' => $this->faker->dateTime($max = 'now'),
            'first_used' => $this->faker->dateTime($max = 'now'),
            'total_earned' => rand(100, 8000),
            'total_redeemed' => rand(100, 3000),
            'package_id' => rand(1, 3),
            'status' => rand(0, 1),
        ];
    }
}

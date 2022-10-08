<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker\Factory::create();
        return [
            
            'name' => $faker->name(),
            'patient_id' => $faker->numberBetween($min = 80000, $max = 150000),
            'gender' => $faker->randomElement(['male', 'female']),
            'birthday' => $faker->date(),
            'phone_number' => $faker->phoneNumber(),
            'category' => $faker->randomElement(['Dental','Medical']),
            'specification' => $faker->randomElement(['Child', 'Teen','Adult','Senior']),
            'date' => $faker->date,
            'status' => $faker->randomElement(['Cancel','Pending','Success','Re-Scheduled'])
        ];
    }
}

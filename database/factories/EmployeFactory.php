<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           "resgistration_number" =>$this->faker->randomDigit(),
           "fullname" =>$this->faker->name(),
           "depart" =>$this->faker->word(),
           "hire_date" =>$this->faker->date(),
           "phone" =>$this->faker->numberBetween(),
           "adress" =>$this->faker->address(),
           "city" =>$this->faker->city()
        ];
    }
}

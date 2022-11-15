<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SemblazaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'profesor_id' => rand(1,2),
            'semblanza' => $this->faker->text()
        ];
    }
}

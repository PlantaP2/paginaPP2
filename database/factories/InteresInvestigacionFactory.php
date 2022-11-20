<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InteresInvestigacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'investigaciones' => $this->faker->text()
        ];
    }
}

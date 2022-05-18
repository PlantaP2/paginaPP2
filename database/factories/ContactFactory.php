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
            'name' => $this->faker->name(),
            'school' => $this->faker->word,
            'email' => $this->faker->unique()->safeEmail(),
            'telephone' => $this->faker->phoneNumber,
            'information' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        ];
    }
}

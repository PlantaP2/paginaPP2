<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'author' => $this->faker->name($gender = null|'male'|'female'),
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'link' => $this->faker->url,
            'abstract' => $this->faker->text($maxNbChars = 1000),
        ];
    }
}

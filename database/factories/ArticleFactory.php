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
            'title' => $this->faker->sentence(6, true),
            'author' => $this->faker->name(),
            'date' => $this->faker->date('Y-m-d', 'now'),
            'link' => $this->faker->url,
            'abstract' => $this->faker->text(1000),
        ];
    }
}

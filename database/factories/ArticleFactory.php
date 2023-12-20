<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'short_description' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'picture' => $this->faker->imageUrl(),
        ];
    }
}

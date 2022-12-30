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
            'title' => $this->faker->sentence(mt_rand(2,4)),
            'slug' => $this->faker->slug(mt_rand(2,4)),
            'excerpt' => $this->faker->paragraph(),
            'desc' => $this->faker->paragraph(mt_rand(5,10)),
            'user_id' => mt_rand(1,3),
            'category_id' => mt_rand(1,2)
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category' => $this->faker->randomElement(['西南财经大学','校长办公室','党委办公室','金融学院']),
            'image' => $this->faker->imageUrl(),
            'title' => $this->faker->sentence(),
            'introduction' => $this->faker->paragraph(),
            'url' => $this->faker->url(),
            'published_at' => $this->faker->dateTime(),
        ];
    }
}

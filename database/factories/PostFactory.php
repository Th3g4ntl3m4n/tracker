<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'slug' => $this->faker->slug,
            'image' => $this->faker->imageurl(720,389),
            'content' => $this->faker->text(800),

//tambien debemos llenar el campo de la relacion

            'user_id' => rand(1,5),
        ];
    }
}

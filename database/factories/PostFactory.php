<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
    public function definition()
    {
        return [
            //
            "title" => $this->faker->words(3, true),
            "body" => $this->faker->paragraph(4),
            "slug" => Str::slug($this->faker->words(3, true), "-"),
            "excerpt" => $this->faker->word(4),
            "user_id" => rand(1,5),
            "category_id" => rand(1,2)
        ];
    }
}

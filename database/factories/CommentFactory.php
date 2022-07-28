<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        if (rand(0, 1) == 1) {
            return [
                'pseudo' => $this->faker->name(),
                'email' => $this->faker->email(),
                'content' => $this->faker->text(2000),
                'article_id' => Article::inRandomOrder()->first(),
            ];
        } else {
            return [
                'user_id' => User::inRandomOrder()->first(),
                'content' => $this->faker->text(2000),
                'article_id' => Article::inRandomOrder()->first(),
            ];
        }
    }
}

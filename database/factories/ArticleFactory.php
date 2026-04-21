<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => $this->faker->sentence(),
            'contenu' => $this->faker->paragraph(),
            'statut' => $this->faker->randomElement(['brouillon', 'publie']),
            'publie_at' => $this->faker->dateTime(),
            'user_id' => \App\Models\User::factory(),
            'categorie_id' => \App\Models\Categorie::factory(),
            'image' => $this->faker->imageUrl(640, 480),

        ];
    }
}

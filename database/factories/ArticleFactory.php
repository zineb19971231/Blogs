<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use App\Models\Categorie;

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
            'image' => 'images/blogs/' . $this->faker->numberBetween(1, 3) . '.jpg',
            'publie_at' => $this->faker->dateTime(),
            'user_id' => $this->faker->randomElement(User::pluck('id')->toArray()),
            'categorie_id' => $this->faker->randomElement(Categorie::pluck('id')->toArray()),

        ];
    }
}

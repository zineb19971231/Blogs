<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
       CategorieSeeder::class,
         UserSeeder::class,
        ArticleSeeder::class,
    ]);

        // User::factory(10)->create();

    
    }
}

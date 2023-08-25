<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ArticleVente;
use App\Models\Category;

class ArticleVenteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ArticleVente::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'libelle' => $this->faker->word,
            'quantiteStock' => $this->faker->numberBetween(-10000, 10000),
            'prix' => $this->faker->randomFloat(0, 0, 9999999999.),
            'reference' => $this->faker->word,
            'photo' => $this->faker->sha256,
            'categorie_id' => Category::factory(),
        ];
    }
}

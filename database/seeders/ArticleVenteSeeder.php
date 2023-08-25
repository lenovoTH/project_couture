<?php

namespace Database\Seeders;

use App\Models\ArticleVente;
use Illuminate\Database\Seeder;

class ArticleVenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArticleVente::factory()->count(5)->create();
    }
}

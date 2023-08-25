<?php

namespace Database\Seeders;

use App\Models\ArticleConfection;
use Illuminate\Database\Seeder;

class ArticleConfectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArticleConfection::factory()->count(5)->create();
    }
}

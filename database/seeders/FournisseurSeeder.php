<?php

namespace Database\Seeders;

use App\Models\Fournisseur;
use Illuminate\Database\Seeder;

class FournisseurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fournisseur::factory()->count(5)->create();
    }
}

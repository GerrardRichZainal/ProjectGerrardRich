<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Project;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        Category::factory(3)
            ->has(Project::factory(5))
            ->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Job;
use App\Models\Portfolio;
use App\Models\Project;
use App\Models\Experience;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
    // Buat 5 kategori
    Category::factory(5)->create();

    // Buat 5 job
    Job::factory(5)->create();

    // Buat 10 project (setiap project memakai category jika ada)
    Project::factory(10)->create();

    // Buat 8 experience
    Experience::factory(8)->create();

    // Buat 20 portfolio (otomatis pakai relasi category & job)
    Portfolio::factory(20)->create();
    }
}

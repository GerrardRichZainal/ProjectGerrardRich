<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Job;
use App\Models\Portfolio;

class PortfolioFactory extends Factory
{
    protected $model = Portfolio::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            // jika category/job sudah di-seed, akan memilih acak; jika belum, akan membuat baru via factory
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory(),
            'job_id' => Job::inRandomOrder()->first()->id ?? Job::factory(),
        ];
    }
}

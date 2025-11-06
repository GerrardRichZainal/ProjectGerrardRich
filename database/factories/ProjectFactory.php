<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition()
    {
        // sesuaikan field dengan migration projects: title, description, image, link, category_id
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->optional()->imageUrl(640, 480),
            'link' => $this->faker->optional()->url(),
            // gunakan kategori yang sudah ada jika tersedia, otherwise buat baru
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id ?? \App\Models\Category::factory(),
        ];
    }
}

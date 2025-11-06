<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Job;

class JobFactory extends Factory
{
    protected $model = Job::class;

    public function definition()
    {
        $title = $this->faker->jobTitle();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
        ];
    }
}

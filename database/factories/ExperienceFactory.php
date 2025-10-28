<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExperienceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'company' => $this->faker->company(),
            'duration' => $this->faker->randomElement([
                'Jan 2022 - Present',
                'Mar 2021 - Dec 2021',
                '2019 - 2020',
                'Feb 2020 - Sep 2020'
            ]),
            'description' => $this->faker->paragraph(3),
            'skills' => implode(', ', $this->faker->randomElements([
                'Laravel', 'UI/UX', 'JavaScript', 'Python', 'React', 'SQL', 'AI', 'Figma'
            ], 3)),
        ];
    }
}

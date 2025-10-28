<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogFactory extends Factory
{
    /**
     * Tentukan model yang terkait dengan factory ini.
     *
     * @var string
     */
    protected $model = \App\Models\Blog::class;

    /**
     * Definisikan state default model Blog.
     *
     * @return array
     */
    public function definition()
    {
        $title_en = $this->faker->sentence(6);
        $title_id = 'Artikel: ' . $this->faker->words(3, true);
        $slug = Str::slug($title_en);

        return [
            'title_en'   => $title_en,
            'title_id'   => $title_id,
            'content_en' => $this->faker->paragraphs(3, true),
            'content_id' => $this->faker->paragraphs(3, true),
            'slug'       => $slug,
            'image'      => $this->faker->imageUrl(800, 600, 'blog', true, 'Post'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

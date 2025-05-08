<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlogPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(rand(6, 10));
        $content = $this->faker->paragraphs(rand(3, 7), true);
        
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => $this->faker->paragraph(),
            'content' => $content,
            'image_path' => null, // You could generate random images here if needed
            'category_id' => Category::inRandomOrder()->first()->id ?? 1,
            'published' => true,
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }

    /**
     * Indicate that the model's status should be unpublished.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unpublished()
    {
        return $this->state(function (array $attributes) {
            return [
                'published' => false,
                'published_at' => null,
            ];
        });
    }
}
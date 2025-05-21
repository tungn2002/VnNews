<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'title'        => fake()->sentence(),
            'content'      => fake()->realText(), // hoặc HTML nếu bạn dùng CKEditor
            'thumbnail'    => fake()->imageUrl(),
            'status'       => fake()->randomElement(['draft', 'pending', 'published', 'rejected']),            
            // Giả sử bạn đã có dữ liệu user và category
            'published_at' => $this->faker->boolean(60) ? $this->faker->dateTimeBetween('-1 month') : null,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at'   => time(),
            'updated_at'   => time(),
        ];
    }
}

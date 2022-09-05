<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'user_id'=>User::factory(),
            'category_id'=>Category::factory(),
            'title'=>$this->faker->sentence,
            'price'=>$this->faker->sentence,
            'slug'=>$this->faker->slug,
            'body'=>$this->faker->paragraph
        ];
    }
}

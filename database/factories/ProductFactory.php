<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'quantity' => $this->faker->numberBetween(0, 100),
            'price' => $this->faker->numberBetween(1, 10000),
            'category_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}

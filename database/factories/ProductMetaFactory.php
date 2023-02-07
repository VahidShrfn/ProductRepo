<?php

namespace Database\Factories;

use App\Models\ProductMetas;
use App\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductMetaFactory extends Factory
{

    protected $model=ProductMetas::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'key'=>fake()->sentence(1),
            'value'=>fake()->sentence(1)
        ];
    }
}

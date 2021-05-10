<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'descriptrion' => $this->faker->sentence(10),
            'product_id' => $this->faker->unique()->numberBetween(1,100),
            'price' => $this->faker->randomNumber()
        ];
    }
}

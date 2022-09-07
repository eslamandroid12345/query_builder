<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{


    protected $model = Product::class;
    public function definition()
    {
        return [


            'product_name' => $this->faker->name,
            'product_buy' => $this->faker->randomElement([2000,7000,9000,200,700]),
            'product_sell' => $this->faker->randomElement([2000,7000,9000,200,700]),
            'product_quantity' => $this->faker->randomElement([2000,7000,9000,200,700]),
            'user_id' => rand(1,1000)
        ];
    }
}

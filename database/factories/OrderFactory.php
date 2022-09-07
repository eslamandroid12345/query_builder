<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{

    protected $model = Order::class;
    public function definition()
    {
        return [


            'order_name' => $this->faker->name,
            'order_price' => $this->faker->randomElement([2000,7000,9000,200,700]),
            'order_quantity' => $this->faker->randomElement([9,7,9,4,3]),
            'order_total' => $this->faker->randomElement([2000,7000,9000,200,700]),
            'user_id' => rand(1,1000),
            'product_id' => rand(1,1000)
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RenterPreferncesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'user_id'=>$this->faker->numberBetween(1-20),
            'price_lowest'=>$this->faker->numberBetween(600-2000),
            'price_highest'=>$this->faker->numberBetween(2150-4500),
            'location'=>$this->faker->city(),
            'bedrooms'=>$this->faker->numberBetween(1-5),
            'bathrooms'=>$this->faker->numberBetween(1-2),
            'parking'=>$this->faker->numberBetween(0-1),
            'children'=>$this->faker->numberBetween(0-1),
            'pets'=>$this->faker->numberBetween(0-1),
           
        ];
    }
}

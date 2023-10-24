<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class WatchFactory   
 
    
 */
class WatchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 1, 10000000),
            'purchase_date' => $this->faker->date(),
            'color' => $this->faker->colorName(),
            'brand' => $this->faker->company(),
            'material' => $this->faker->word(),
            'movement' => $this->faker->word(),

            
        ];
    }
}

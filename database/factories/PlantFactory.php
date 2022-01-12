<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'species' => $this->faker->word(), 
            'instructions' => $this->faker->randomHtml(1,2),
            'photo' => 'photo/plant.jpg'
        ];
    }
}

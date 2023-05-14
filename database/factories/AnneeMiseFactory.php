<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnneeMiseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'annee'=>$this->faker->randomNumber()
        ];
    }
}

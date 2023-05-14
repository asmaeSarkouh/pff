<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EspaceCarburantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
         return [
            'date'=>$this->faker->date(),
            'quantite'=>$this->faker->randomDigit(100),
            'paye'=>$this->faker->randomNumber(),
            'espace_vehicule_id'=>EspaceVehicule::inRandomOrder()->first()
        ];
    }
}

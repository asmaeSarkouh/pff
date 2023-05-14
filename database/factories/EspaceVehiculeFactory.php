<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EspaceVehiculeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
           'nom_vehicule'=>$this->faker->word(),
            'immatricule'=>$this->faker->sentence(2),
           'type_carburant_id'=>TypeCarburant::inRandomOrder()->first(),
            'consomation'=>$this->faker->randomDigit(100),
            'marque_id'=>Marque::inRandomOrder()->first(),
            'modele_id'=>Modele::inRandomOrder()->first(),
            'annee_mise_id'=>AnneeMise::inRandomOrder()->first(),
            'kilometrage'=>$this->faker->randomDigit(100),
            'image'=>$this->faker->sentence(2),
            'user_id'=>User::inRandomOrder()->first()
        ];
    }
}

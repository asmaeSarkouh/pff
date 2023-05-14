<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EspaceMaintenanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_maintenance_id'=>TypeMaintenance::inRandomOrder()->first(),
            'date'=>$this->faker->date(),
            'kilometrage'=>$this->faker->randomDigit(100),
            'frais'=>$this->faker->randomDigit(1000),
            'image'=>$this->faker->sentence(2),
            'espace_vehicule_id'=>EspaceVehicule::inRandomOrder()->first(),
        ];
    }
}

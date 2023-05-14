<?php

namespace Database\Seeders;

use App\Models\AnneeMise;
use App\Models\Marque;
use App\Models\Modele;
use App\Models\TypeCarburant;
use App\Models\TypeMaintenance;
use DeepCopy\TypeMatcher\TypeMatcher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //TypeCarburant::factory()->create();
        $type=
         [
            [
             'type'=>'essence'
          ],
            [
             'type'=>'diesel'
            ],
            [
             'type'=>'electrique'
            ],
            [
             'type'=>'hybride'
            ],
         
         ];
         $annee=[
            [
             'annee'=>2019
            ],
            [
             'annee'=>2020
            ],
            [
             'annee'=>2021
            ],
            [
             'annee'=>2022
            ],
            [
                'annee'=>2023
               ],
            ];
        $marque=[
         [
          'marque'=>'Hyundai'
         ],
         [
          'marque'=>'Dacia'
         ],
         [
          'marque'=>'Kia'
         ]
         ];
         $model=[
            [
             'model'=>'Sonata',
             'marque_id'=>'1'
            ],
            [
             'model'=>'Elantra',
             'marque_id'=>'1'
            ],
            [
             'model'=>'Santa Fe',
             'marque_id'=>'1'
            ],
            [
             'model'=>'Sandero',
             'marque_id'=>'2'
            ],
            [
             'model'=>'Duster',
             'marque_id'=>'2'
            ],
            [
             'model'=>'Lodgy',
             'marque_id'=>'2'
            ],
            [
             'model'=>'Otima',
             'marque_id'=>'3'
            ],
            [
             'model'=>'Soul',
             'marque_id'=>'3'
            ],
            [
             'model'=>'Optima',
             'marque_id'=>'3'
            ],
         ];
         $typeMaintenance=[
            ['type'=>'moteur'],
            ['type'=>'group de transmission'],
            ['type'=>'cycle de conditionnement'],
            ['type'=>'electricite'],
            ['type'=>'carrosserie'],
            ['type'=>'freins'],
         ];
         foreach ($type as $t) {
             TypeCarburant::factory()->create([
                 'type' => $t['type']
             ]);
         
     }
     foreach($annee as $a){
        AnneeMise::factory()->create([
         'annee'=>$a['annee']
        ]);
      }
        foreach ($marque as $m ) {
         
         Marque::factory()->create([
            'marque'=>$m['marque']
         ]);
        };
        foreach ($model as $m ) {
        
         Modele::factory()->create([
            'model'=>$m['model'],
            'marque_id'=>$m['marque_id']
         ]);
        }
        foreach ($typeMaintenance as $t ) {
        
         TypeMaintenance::factory()->create([
            'type'=>$t['type']
         ]);
        }
      
   }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspaceVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espace_vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('nom_vehicule');
            $table->string('immatricule')->unique();
            $table->foreignId('type_carburant_id');
            $table->integer('consomation');
            $table->foreignId('marque_id');
            $table->foreignId('modele_id');
            $table->foreignId('annee_mise_id');
            $table->integer('kilometrage');
            $table->string('image');
            $table->foreignId('user_id')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('espace_vehicules');
    }
}

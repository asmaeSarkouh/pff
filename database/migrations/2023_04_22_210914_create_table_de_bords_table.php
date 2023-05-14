<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDeBordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_de_bords', function (Blueprint $table) {
            $table->id();
            $table->foreign('espace_vehicule_id')->references('id')->on('espace_vehicules');
            $table->unsignedBigInteger('espace_vehicule_id');
            $table->foreign('espace_maintenance_id')->references('id')->on('espace_maintenances');
            $table->unsignedBigInteger('espace_maintenance_id');
            $table->foreign('espace_carburant_id')->references('id')->on('espace_carburants');
            $table->unsignedBigInteger('espace_carburant_id');
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
        Schema::dropIfExists('table_de_bords');
    }
}

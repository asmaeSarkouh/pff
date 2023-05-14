<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspaceMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espace_maintenances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_maintenance_id');
            $table->date('date');
            $table->integer('kilometrage');
            $table->integer('frais');
            $table->string('image');
            $table->foreignId('espace_vehicule_id')->default(1);
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
        Schema::dropIfExists('espace_maintenances');
    }
}

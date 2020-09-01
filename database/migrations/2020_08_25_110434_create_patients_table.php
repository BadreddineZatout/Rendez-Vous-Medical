<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements("IdPatient");
            $table->string("NomPatient");
            $table->string("PrenomPatient");
            $table->date("DateNaissance");
            $table->string("Telephone");
            $table->unsignedBigInteger("Wilaya");
            $table->unsignedBigInteger("Commune");
            $table->string("adresse");
            $table->foreign("Wilaya")->references("id")->on("wilayas")->onDelete("cascade");
            $table->foreign("Commune")->references("id")->on("communes")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}

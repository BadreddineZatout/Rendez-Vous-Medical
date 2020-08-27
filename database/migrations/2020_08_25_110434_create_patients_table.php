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
            $table->string("NomPatien");
            $table->string("PrenomPatien");
            $table->date("DateNaissance");
            $table->string("Telephone");
            $table->string("Email");
            $table->unsignedBigInteger("Wilaya");
            $table->string("adresse");
            $table->foreign("Wilaya")->references("id")->on("wilayas")->onDelete("cascade");
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

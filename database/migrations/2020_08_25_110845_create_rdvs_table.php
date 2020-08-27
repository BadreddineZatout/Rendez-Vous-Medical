<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRdvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdvs', function (Blueprint $table) {
            $table->BigInteger("NumeroRDV");
            $table->unsignedInteger("Medecin");
            $table->unsignedBigInteger("Patient");
            $table->date("DateRDV");
            $table->time("HeureRDV");
            $table->primary(["Medecin", "Patient", "NumeroRDV"]);
            $table->foreign("Medecin")->references("IdMedecin")->on("medecins")->onDelete("cascade");
            $table->foreign("Patient")->references("IdPatient")->on("patients")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rdvs');
    }
}

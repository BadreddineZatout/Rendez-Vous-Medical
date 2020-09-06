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
            $table->BigInteger("NumeroRDV")->primary();
            $table->unsignedBigInteger("Medecin");
            $table->unsignedBigInteger("Patient");
            $table->date("DateRDV");
            $table->time("HeureRDV");
            $table->timestamps();
            $table->foreign("Medecin")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("Patient")->references("id")->on("users")->onDelete("cascade");
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

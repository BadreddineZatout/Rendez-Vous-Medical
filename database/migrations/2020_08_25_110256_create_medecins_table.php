<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedecinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medecins', function (Blueprint $table) {
            $table->increments("IdMedecin");
            $table->String("NomMedecin");
            $table->String("PrenomMedecin");
            $table->String("Adresse");
            $table->string("Cabinet");
            $table->string("PosGPS");
            $table->string("Telephone");
            $table->unsignedBigInteger("Specialite");
            $table->unsignedBigInteger("Wilaya");
            $table->unsignedBigInteger("Commune");
            $table->foreign("Specialite")->references("id")->on("specialites")->onDelete("cascade");
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
        Schema::dropIfExists('medecins');
    }
}

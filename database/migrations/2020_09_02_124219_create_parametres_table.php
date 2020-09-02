<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametres', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("Medecin");
            $table->time("Debut");
            $table->time("Fermeture");
            $table->integer("cycle");
            $table->integer("NombreRdv");
            $table->foreign("Medecin")->references("IdMedecin")->on("medecins")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parametres');
    }
}

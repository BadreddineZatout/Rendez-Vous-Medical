<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->String("nom");
            $table->String("prenom");
            $table->string('user_type');
            $table->unsignedBigInteger("wilaya")->nullable();
            $table->unsignedBigInteger("commune")->nullable();
            $table->string('phone')->unique();
            $table->string('password');
            $table->string('sex');
            $table->String("adresse");            
            $table->date("date_naissance")->nullable();            
            $table->string("cabinet")->nullable();
            $table->unsignedBigInteger("specialite")->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign("specialite")->references("id")->on("specialites")->onDelete("cascade");
            $table->foreign("wilaya")->references("id")->on("wilayas")->onDelete("cascade");
            $table->foreign("commune")->references("id")->on("communes")->onDelete("cascade");
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marques', function (Blueprint $table) {
            $table->increments('id');
            $table->string('designation');
            $table->timestamps();
        });

        Schema::create('modeles', function (Blueprint $table){
            $table->increments('id');
            $table->string('designation');
            $table->integer('marque_id')->unsigned();
            $table->foreign('marque_id')->references('id')->on('marques');
            $table->timestamps();

        });

        Schema::create('motorisation', function(Blueprint $table){
           $table->increments('id');
           $table->string('designation');
           $table->integer('modele_id')->unsigned();
           $table->foreign('modele_id')->references('id')->on('modeles');
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
        Schema::dropIfExists('marque');
    }
}

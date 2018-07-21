<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('pieces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reference');
            $table->integer('scategory_id')->unsigned();
            $table->foreign('scategory_id')->references('id')->on('scategories');
            $table->string('chassis');
            $table->timestamps();
        });

        Schema::create('stockages', function(Blueprint $table){
           $table->integer('piece_id')->unsigned();
           $table->integer('local_id')->unsigned();
           $table->primary(['piece_id','local_id']);
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
        Schema::dropIfExists('pieces');
        Schema::dropIfExists('stockages');

    }
}

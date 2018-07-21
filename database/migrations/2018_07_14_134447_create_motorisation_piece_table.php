<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotorisationPieceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motorisation_piece', function (Blueprint $table) {
            $table->integer('motorisation_id')->unsigned();
            $table->integer('piece_id')->unsigned();
            $table->primary(['motorisation_id','piece_id']);
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
        Schema::dropIfExists('motorisation_piece');
    }
}

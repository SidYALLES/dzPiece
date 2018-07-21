<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbonnementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonnement', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type');
            $table->boolean('actif');
            $table->integer('numero');
            $table->string('addresse');
            $table->integer('type_id');
            $table->foreign('type_id')
                ->references('id')->on('typeAb');
            $table->timestamps();
        });
        
        Schema::create('typeAb', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('montant');
            $table->integer('durreAB');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('abonnement');
        Schema::drop('typeAb');
    }
}

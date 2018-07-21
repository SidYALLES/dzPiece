<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->integer('type');
            $table->boolean('actif');
            $table->integer('numero');
            $table->string('addresse');
            $table->timestamps();
            $table->foreign('email')
                ->references('email')->on('users');
        });
        
        Schema::create('admins', function (Blueprint $table) {
            $table->string('email');
            $table->primary('email');
            $table->string('nom');
            $table->string('prenom');
            $table->integer('numero');
            $table->string('addresse');
            $table->integer('privilege');
            $table->timestamps();
            $table->foreign('email')
                ->references('email')->on('users');
        });
        
        Schema::create('prives', function (Blueprint $table) {
            $table->string('email');
            $table->primary('email');
            $table->string('nom');
            $table->string('prenom');
            $table->date('dateN');
            $table->timestamps();
            $table->foreign('email')
                ->references('email')->on('clients');
        });
        
        Schema::create('concessionnaires', function (Blueprint $table) {
            $table->string('email');
            $table->primary('email');
            $table->string('nom');
            $table->string('prenom');
            $table->date('dateN');
            $table->timestamps();
           $table->foreign('email')
                ->references('email')->on('clients');
        });
        
        Schema::create('particuliers', function (Blueprint $table) {
            $table->string('email');
            $table->primary('email');
            $table->string('nom');
            $table->string('prenom');
            $table->date('dateN');
            $table->timestamps();
            $table->foreign('email')
                ->references('email')->on('clients');
        });
    }

    
    
    public function down()
    {
        Schema::drop('clients');
        Schema::drop('prives');
        Schema::drop('concessionnaires');
        Schema::drop('particuliers');
        
    }
}

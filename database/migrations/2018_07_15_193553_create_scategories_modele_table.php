<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScategoriesModeleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scategories_modele', function (Blueprint $table) {
            $table->integer('scategory_id')->unsigned();
            $table->integer('modele_id')->unsigned();
            $table->primary(['scategory_id','modele_id']);
            $table->integer('vue');
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
        Schema::dropIfExists('scategories_modele');
    }
}

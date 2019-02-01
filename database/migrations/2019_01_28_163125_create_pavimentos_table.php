<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePavimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pavimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_pavimento');
            $table->integer('id_bloco')->unsigned();
            $table->timestamps();
        });
          Schema::table('pavimentos', function (Blueprint $table) {
            $table->foreign('id_bloco')->references('id')->on('blocos');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pavimentos');
    }
}

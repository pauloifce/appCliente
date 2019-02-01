<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chaves', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_chave');
            $table->integer('status_chave');
            $table->integer('id_sala')->unsigned();
            $table->timestamps();
        });
        Schema::table('chaves', function (Blueprint $table) {
            $table->foreign('id_sala')->references('id')->on('salas');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chaves');
    }
}

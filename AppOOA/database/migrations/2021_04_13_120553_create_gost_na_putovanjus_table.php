<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGostNaPutovanjusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gost_na_putovanjus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idGosta');
            $table->foreignId('idPutovanja');
            $table->timestamps();

            $table->foreign('idGosta')->references('id')->on('gosts')->onDelete('restrict');
            $table->foreign('idPutovanja')->references('id')->on('putovanjes')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gost_na_putovanjus');
    }
}

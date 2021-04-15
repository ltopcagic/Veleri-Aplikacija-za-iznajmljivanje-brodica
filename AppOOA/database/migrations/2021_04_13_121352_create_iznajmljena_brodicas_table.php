<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIznajmljenaBrodicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iznajmljena_brodicas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idGosta');
            $table->foreignId('idBrodica');
            $table->date('datum_iznajmljivanja');
            $table->timestamps();

            $table->foreign('idGosta')->references('id')->on('gosts')->onDelete('restrict');
            $table->foreign('idBrodica')->references('id')->on('brodicas')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iznajmljena_brodicas');
    }
}

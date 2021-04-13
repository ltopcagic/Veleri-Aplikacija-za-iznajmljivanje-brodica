<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSevisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sevisis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idBrodice');
            $table->date('datum');
            $table->string('opis');
            $table->timestamps();

            $table->foreign('idBrodice')->references('id')->on('brodicas')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sevisis');
    }
}

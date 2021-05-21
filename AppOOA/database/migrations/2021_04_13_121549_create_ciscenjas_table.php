<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiscenjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciscenjas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idBrodice');
            $table->date('datum');
            $table->timestamps();

            $table->foreign('idBrodice')->references('id')->on('brodicas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciscenjas');
    }
}

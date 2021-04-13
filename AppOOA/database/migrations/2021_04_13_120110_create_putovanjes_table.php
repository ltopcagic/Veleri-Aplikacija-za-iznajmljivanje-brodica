<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePutovanjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('putovanjes', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->string('opis');
            $table->date('datum_pocetka');
            $table->date('datum_zavrsetka');
            $table->decimal('cijena');
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
        Schema::dropIfExists('putovanjes');
    }
}

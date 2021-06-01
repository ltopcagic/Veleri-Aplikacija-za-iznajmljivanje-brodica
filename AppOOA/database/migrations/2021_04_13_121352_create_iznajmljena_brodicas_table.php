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
            $table->foreignId('idBrodica');
            $table->string('ime_gosta');
            $table->string('prezime_gosta');
            $table->string('email_gosta');
            $table->string('telefon_gosta');
            $table->date('datum_iznajmljivanja');
            $table->timestamps();

            $table->foreign('idBrodica')->references('id')->on('brodicas')->onDelete('cascade');
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Webgalery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webgalery', function (Blueprint $table) {
            $table->increments('id');
            $table->string('deskripsi_galeri')->length(50);
            $table->string('foto_galery')->length(100);
            $table->string('foto_background1')->length(100);
            $table->string('foto_background2')->length(100);
            $table->string('foto_background3')->length(100);
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
        Schema::dropIfExists('webgalery');
    }
}

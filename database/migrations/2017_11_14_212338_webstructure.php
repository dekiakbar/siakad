<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Webstructure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webstructure', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_struktur')->length(50);
            $table->string('jabatan_struktur')->length(50);
            $table->string('link_struktur')->length(50);
            $table->string('fb_struktur')->length(100)->nullable();
            $table->string('twitter_struktur')->length(100)->nullable();
            $table->string('linkedin_struktur')->length(100)->nullable();
            $table->string('google_struktur')->length(100)->nullable();
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
        Schema::dropIfExists('webstructure');
    }
}

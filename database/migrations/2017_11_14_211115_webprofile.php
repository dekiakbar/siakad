<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Webprofile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webprofile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kampus')->length(50);
            $table->string('judul_about')->length(30);
            $table->string('isi_about')->length(500);
            $table->string('foto_about')->length(100);
            $table->string('alamat_kampus')->length(100);
            $table->string('telepon_kampus')->length(20);
            $table->string('fax_kampus')->length(20);
            $table->string('email_kampus')->length(50);
            $table->string('fb_kampus')->length(100)->nullable();
            $table->string('twitter_kampus')->length(100)->nullable();
            $table->string('linkedin_kampus')->length(100)->nullable();
            $table->string('google_kampus')->length(100)->nullable();
            $table->string('koordinat')->length(100);
            $table->string('foto_slider1')->length(100);
            $table->string('foto_slider2')->length(100);
            $table->string('foto_slider3')->length(100);
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
        Schema::dropIfExists('webprofile');
    }
}

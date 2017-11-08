<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Jurusan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurusan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_jurusan')->length(8)->unique();
            $table->string('nama_jurusan')->length(50);
            $table->integer('id_fakultas')->unsigned();
            $table->string('jenjang')->length(8);
            $table->integer('jumlah_semester')->length(2);
            $table->timestamps();
        });

        Schema::table('jurusan', function(Blueprint $table){
            $table->foreign('id_fakultas')->references('id')->on('fakultas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jurusan');
    }
}

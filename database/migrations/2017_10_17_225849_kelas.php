<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_kelas')->unique()->length(8);
            $table->string('kode_jurusan')->length(8);
            $table->string('nama_kelas')->length(50);
            $table->date('tahun');
            $table->timestamps();
        });

        Schema::table('kelas', function (Blueprint $table){
            $table->foreign('kode_jurusan')->references('kode_jurusan')->on('jurusan')->onDelete('cascade')->onUpdate('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
    }
}

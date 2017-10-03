<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Krs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('krs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim')->length(8);
            $table->string('nip')->length(8);
            $table->string('kode_mk')->length(8);
            $table->integer('absen')->length(3);
            $table->integer('uts')->length(3);
            $table->integer('uas')->length(3);
            $table->timestamps();
        });

        Schema::table('krs' , function(Blueprint $table){
            $table->foreign('nim')->references('nim')->on('mahasiswa')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nip')->references('nip')->on('dosen')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kode_mk')->references('kode_mk')->on('mata_kuliah')->onDelete('cascade')->onUpdate('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('krs');
    }
}

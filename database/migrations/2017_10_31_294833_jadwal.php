<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Jadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_jadwal')->unique()->length(8);
            $table->string('nip')->length(8);
            $table->string('kode_jurusan')->length(8);
            $table->string('kode_kelas')->length(8);
            $table->string('kode_ruang')->length(8);
            $table->string('kode_mk')->length(8);
            $table->string('kode_hari')->length(8);
            $table->string('kode_jam')->length(8);
            $table->timestamps();
        });

        Schema::table('jadwal',function (Blueprint $t){
            $t->foreign('nip')->references('nip')->on('dosen')->onDelete('cascade')->onUpdate('cascade');
            $t->foreign('kode_jurusan')->references('kode_jurusan')->on('jurusan')->onDelete('cascade')->onUpdate('cascade');
            $t->foreign('kode_kelas')->references('kode_kelas')->on('kelas')->onDelete('cascade')->onUpdate('cascade');
            $t->foreign('kode_ruang')->references('kode_ruang')->on('ruang')->onDelete('cascade')->onUpdate('cascade');
            $t->foreign('kode_mk')->references('kode_mk')->on('mata_kuliah')->onDelete('cascade')->onUpdate('cascade');
            $t->foreign('kode_hari')->references('kode_hari')->on('hari')->onDelete('cascade')->onUpdate('cascade');
            $t->foreign('kode_jam')->references('kode_jam')->on('jam')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}

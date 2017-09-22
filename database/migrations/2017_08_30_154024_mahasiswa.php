<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim');
            $table->string('nama');
            $table->string('alamat');
            $table->string('jenis_kelamin');
            $table->string('no_tlp');
            $table->string('email');
            $table->string('tempat');
            $table->date('tanggal');
            $table->string('link');
            $table->Integer('id_jurusan')->unsigned();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints('mahasiswa', function(Blueprint $table){
            $table->foreign('id_jurusan')->references('id')->on('jurusan')->onDelete('CASCADE');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}

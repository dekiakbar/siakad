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
            $table->string('nim',8)->unique()->index('nim');
            $table->string('nama',30);
            $table->string('alamat',100);
            $table->string('jenis_kelamin',9);
            $table->string('no_tlp',14);
            $table->string('email',30);
            $table->string('tempat',20);
            $table->date('tanggal');
            $table->string('link',30);
            $table->Integer('id_jurusan')->unsigned();
            $table->timestamps();
        });

        Schema::table('mahasiswa', function(Blueprint $table){
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PEbook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_ebook', function (Blueprint $table) {
            $table->increments('p_ebook_id');
            $table->string('judul')->length(150);
            $table->integer('id_penulis')->unsigned();
            $table->integer('id_penerbit')->unsigned();
            $table->integer('id_lisensi')->unsigned();
            $table->integer('id_kategori')->unsigned();
            $table->string('subkategori')->length(100);
            $table->date('tahun')->length();
            $table->integer('halaman')->length(5);
            $table->string('deskirpsi')->length(300);
            $table->timestamps();
        });

        Schema::table('p_ebook', function (Blueprint $table){
            $table->foreign('id_penulis')->references('p_penulis_id')->on('p_penulis')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_penerbit')->references('p_penerbit_id')->on('p_penerbit')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_lisensi')->references('p_lisensi_id')->on('p_lisensi')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_kategori')->references('p_kategori_id')->on('p_kategori')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p_ebook');
    }
}

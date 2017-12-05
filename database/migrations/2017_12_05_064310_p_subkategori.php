<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PSubkategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_subkategori', function (Blueprint $table) {
            $table->increments('p_subkategori_id');
            $table->string('nama_subkategori')->length(50);
            $table->integer('id_p_kategori')->unsigned();
            $table->timestamps();
        });

        Schema::table('p_subkategori', function(Blueprint $table){
            $table->foreign('id_p_kategori')->references('p_kategori_id')->on('p_kategori')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p_subkategori');
    }
}

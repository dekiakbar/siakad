<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Webservice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webservice', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul')->length(50);
            $table->string('deskripsi')->length(50);
            $table->string('sub_judul')->length(50);
            $table->string('sub_deskripsi')->length(50);
            $table->string('icon')->length(30);
            $table->string('link_service')->length(30);
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
        Schema::dropIfExists('webservice');
    }
}

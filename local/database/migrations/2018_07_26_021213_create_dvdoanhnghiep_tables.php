<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDvdoanhnghiepTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dvdoanhnghiep', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('tieu_de');
            $table->string('noi_dung');
            $table->string('slug');
            $table->string('anh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dvdoanhnghiep');
    }
}

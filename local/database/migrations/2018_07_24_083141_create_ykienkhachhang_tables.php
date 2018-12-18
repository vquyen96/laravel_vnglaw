<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYkienkhachhangTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ykienkhachhang', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('ten_kh');
            $table->string('chuc_vu');
            $table->string('anh');
            $table->string('y_kien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ykienkhachhang');
    }
}

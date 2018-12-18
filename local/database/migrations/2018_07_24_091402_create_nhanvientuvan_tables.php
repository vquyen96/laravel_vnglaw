<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanvientuvanTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvientuvan', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('ten_nv');
            $table->string('chuc_vu');
            $table->string('thong_tin');
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
        Schema::dropIfExists('nhanvientuvan');
    }
}

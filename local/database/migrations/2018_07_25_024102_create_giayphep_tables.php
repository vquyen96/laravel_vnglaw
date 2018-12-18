<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiayphepTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giayphep', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('tieu_de');
            $table->string('loi_dan');
            $table->string('noi_dung');
            $table->string('slug');
            $table->string('anh');
            $table->integer('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giayphep');
    }
}

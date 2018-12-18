<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTintucTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintuc', function (Blueprint $table) {
            $table->increments('id_tt');
            $table->string('tieu_de');
            $table->string('loi_dan');
            $table->string('noi_dung');
            $table->string('slug');

            $table->integer('id_lt')->unsigned();
            $table->foreign('id_lt')
            ->references('id_lt')
            ->on('loaitintuc')
            ->onDelete('cascade');

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
        Schema::dropIfExists('tintuc');
    }
}

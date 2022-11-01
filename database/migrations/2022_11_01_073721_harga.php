<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Harga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harga', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('produk_id')->nullable();
            $table->foreign('produk_id')->references('id')->on('produk');
            $table->integer('harga_normal');
            $table->integer('harga_tanggung');
            $table->integer('harga_mini');
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
        Schema::dropIfExists('harga');
    }
}

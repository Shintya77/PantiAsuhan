<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PesananDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesananDetail', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('harga_id')->nullable();
            $table->foreign('harga_id')->references('id')->on('harga');
            $table->date('tanggal')->nullable();
            $table->integer('jumlah');
            $table->integer('total_harga');
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
        Schema::dropIfExists('pesananDetail');
    }
}

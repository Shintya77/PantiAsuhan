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
            $table->foreignId('pesan_id')->constrained();
            $table->unsignedBigInteger('produk_id');
            $table->foreign('produk_id')->references('id')->on('produk');
            $table->integer('jumlah');
            $table->integer('total');
            $table->integer('total_harga')->nullable();
            $table->string('bukti_pembayaran')->nullable();
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

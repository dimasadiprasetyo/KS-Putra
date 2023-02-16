<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualantunaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualantunais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id');
            $table->foreignId('subkategori_id');
            $table->foreignId('datakavling_id');
            $table->foreignId('datapembeli_id');
            $table->foreignId('datamarketing_id')->nullable();
            $table->foreignId('metodepembayaran_id');
            $table->bigInteger('promo')->nullable();
            $table->bigInteger('bayar')->nullable();
            $table->date('tertanggal');
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
        Schema::dropIfExists('penjualantunais');
    }
}

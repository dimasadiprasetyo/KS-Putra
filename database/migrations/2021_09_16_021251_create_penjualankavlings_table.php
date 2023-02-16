<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualankavlingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualankavlings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id');
            $table->foreignId('subkategori_id');
            $table->foreignId('datakavling_id');
            $table->foreignId('datapembeli_id');
            $table->foreignId('datamarketing_id')->nullable();
            $table->foreignId('metodepembayaran_id');
            $table->foreignId('lamaangsurantambah_id')->nullable();
            $table->bigInteger('tanggal')->nullable();
            $table->bigInteger('promo')->nullable();
            $table->bigInteger('dp')->nullable();
            $table->date('tertanggal');
            $table->timestamps();
        });
    }

    /*p*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualankavlings');
    }
}

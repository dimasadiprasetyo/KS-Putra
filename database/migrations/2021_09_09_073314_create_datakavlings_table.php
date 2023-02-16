<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatakavlingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datakavlings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id');
            $table->foreignId('subkategori_id');
            $table->string('cluster');
            $table->bigInteger('hargacash');
            $table->string('ukurantanah');
            $table->bigInteger('tipekavling');
            $table->string('nomorkavling');
            $table->string('luaskavling');
            $table->bigInteger('nopbb')->nullable();
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
        Schema::dropIfExists('datakavlings');
    }
}

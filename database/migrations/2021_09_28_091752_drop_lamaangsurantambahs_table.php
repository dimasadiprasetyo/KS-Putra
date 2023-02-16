<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropLamaangsurantambahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('lamaangsurantambahs');
        Schema::create('lamaangsurantambahs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subkategori_id');
            $table->bigInteger('lamapembayaran');
            $table->foreignId('lamaangsuran_id');            
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
        //
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLamaangsurantambahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lamaangsurantambahs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subkategori_id');
            $table->bigInteger('lamapembayaran');
            // $table->string('namakavling'); //seng metode ng lamaangsurantambah ke ambil e dek lamaangsuran lur
            
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
        Schema::dropIfExists('lamaangsurantambahs');
    }
}

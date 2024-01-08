<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenawaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penawaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk')->nullable();
            $table->string('nama_penawar');
            $table->float('harga_tawar');
            $table->string('metode_pembayaran');
            $table->string('opsi_pengiriman');
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
        Schema::dropIfExists('penawaran');
    }
}

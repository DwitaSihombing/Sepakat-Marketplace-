<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateAddprodukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        Schema::create('addproduk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->float('harga_produk');
            $table->date('tanggal_awal');
            $table->date('tanggal_akhir');
            $table->string('deskripsi');
            $table->string('tipe_produk');
            $table->string('foto');
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
        Schema::dropIfExists('addproduk');
    }
}

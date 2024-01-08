<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addproduk extends Model
{
    use HasFactory;
    protected $table='addproduk';
    protected $fillable = [
        'nama_produk',
        'harga_produk',
        'tanggal_awal',
        'tanggal_akhir',
        'deskripsi',
        'tipe_produk',
        'foto'
    ];
}
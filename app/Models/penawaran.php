<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penawaran extends Model
{
    use HasFactory;
    protected $table='penawaran';
    protected $fillable = [
        'nama_produk',
        'nama_penawar',
        'harga_tawar',
        'metode_pembayaran',
        'opsi_pengiriman'

    ];
}
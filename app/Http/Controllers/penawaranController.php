<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penawaran;
use App\Models\addproduk;
use Session;
class penawaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $penawaran = addproduk::find($id);
        return view ('transaksi',compact('penawaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $penawaran = penawaran::create([
             'nama_produk' => $request->nama_produk,
             'nama_penawar' => session()->get('email'),
            'harga_tawar' => $request->harga_tawar,
            'metode_pembayaran' => $request->metode_pembayaran,
            'opsi_pengiriman'=> $request->opsi_pengiriman
         ]);
          
        $penawaran->save();

        return redirect()->intended('homepage_pembeli');
    }

    public function daftar_pemesanan()
    {
        $penawaran = penawaran::all();

        return view('Daftar_pemesanan',compact('penawaran'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
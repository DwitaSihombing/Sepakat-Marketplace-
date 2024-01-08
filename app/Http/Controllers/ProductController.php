<?php

namespace App\Http\Controllers;


use Illuminate\Http\addproduk;
use App\Models\search;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function GetAddProduct(){
        return view('add_produk');
    }
 

    public function PostAddProduct(Request $request){
        
        $this->validate($request, [
            'nama_produk' => ['required'],
            'tanggal_produk' => ['required', 'date']
        ]);

        $produk = addproduk::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('img/',$request->file('foto')->getClientOriginalName());
            $produk->foto = $request->file('foto')->getClientOriginalName();
            $produk->save();
        }



        // DB::table('addproduk')->insert([
        //     'nama_produk' => $request->nama_produk,
        //     'tanggal_awal' => $request->tanggal_awal,
        //     'tanggal_akhir' => $request->tanggal_akhir,
        //     'deskripsi' => $request->deskripsi,
        //     'tipe_produk' => $request->tipe_produk,
        // ]);


        return redirect()->route('/homepage_pembeli');
    }

    public function test(Request $request){

        DB::table('addproduk')->insert([
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'tanggal_awal' => $request->tanggal_awal,
            'tanggal_akhir' => $request->tanggal_akhir,
            'foto' => $request->foto,
            'deskripsi' => $request->deskripsi,
            'tipe_produk' => $request->tipe_produk,
        ]);

        return redirect('/dashboard_penjual');
    }

    public function search(Request $request)
    {
        $search = produk::where('nama_produk', 'like', "%".$request->search."%")->paginate(2);
        
        return redirect()->route('/homepage_pembeli');
    }

    public function deleteProduct($id){
        \App\addproduk::find($id)->delete();
        return redirect()->route('/homepage_pembeli');
    }

    public function editProduct($id){
        $produk = addproduk::find($id);
        return view('editProduk', compact('produk'));
    }

    public function updateProduct(Request $request, $id){
        $produk = addproduk::find($id);
        $produk->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('img/',$request->file('foto')->getClientOriginalName());
            $produk->foto = $request->file('foto')->getClientOriginalName();
            $produk->save();
        }

        return redirect('/dashboard_penjual');
    }

    public function detailProduct($id){
        $produk = addproduk::find($id);
        return view('detail_produk', compact('produk'));
    }

}
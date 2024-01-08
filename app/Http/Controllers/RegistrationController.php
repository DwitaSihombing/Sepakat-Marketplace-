<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function registration(Request $request){
        $user = User::create([
        'name'=> $request-> name,
        'alamat'=> $request-> alamat,
        'email'=> $request-> email,
        'no_telepon'=> $request-> no_telepon,
        'password'=> $request-> password,
        'role'=> $request-> role,
        ]);
    $user->save();


    }

    public function homepage_pembeli(){
        $produk = DB::table('addproduk')->get();
        return view('homepage_pembeli', compact('produk'));
    }
}

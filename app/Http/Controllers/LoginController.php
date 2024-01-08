<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('homepage_pembeli');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        // if (Auth::Attempt($data)) {
        //     return redirect('homepage_pembeli');
        // }else{
        //     Session::flash('error', 'Email atau Password Salah');
        //     return redirect('/login');
        // }
        $user = DB::table('users')->where('email',$request->email)->first();
        if ($user){
            if($user->password==$request->password){
                $request->session()->put('email',$user->email);
                $request->session()->put('id',$user->id);
                return redirect('homepage_pembeli');
            }else{
                Session::flash('error', 'Email atau Password Salah');
                return redirect('/login');}
        }else{
            dd('username salah');
        }

        
    }

    public function actionlogout()
    {
        Session()->flush();
        return redirect('/');
    }
}
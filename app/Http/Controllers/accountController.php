<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class accountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

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
         $account = User::create([
        'name'=> $request-> name,
        'alamat'=> $request-> alamat,
        'email'=> $request-> email,
        'no_telepon'=> $request-> no_telepon,
        'password'=> $request-> password,
         ]);
          
        $account->save();

        return redirect()->intended('account');
    }

    public function accountedit($id)
    {
        $account = User::find($id);

        return view('account',compact('account'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $account = User::find($id);
        
        return view('account',compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $account = User::find($id);

        return view('edit_account',compact('account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $account = User::find($request -> id);

        $tujuan_upload = 'data_file';
        $file= $request->file('foto');
        $file_size = $file->getSize();
        $file_extension = $file->getClientOriginalExtension();
        $file_name2 = $file->getClientOriginalName();
        $file_name = pathinfo($file_name2,PATHINFO_FILENAME);
        $tst_id =$file_name.str_pad( 1, 8, '0', STR_PAD_LEFT);
        $transaction_id = $tst_id;
        $new_file_name = $transaction_id.".".$file_extension;
        $destination_path = public_path('/img');
        $file->move($destination_path,$new_file_name);

        $account->name = $request->name;
        $account->alamat = $request->alamat;
        $account->email = $request->email;
        $account->no_telepon = $request->no_telepon;
        $account->foto =$new_file_name ;
        $account->update();
        return view('account',compact('account'));
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

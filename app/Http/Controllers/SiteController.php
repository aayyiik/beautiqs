<?php

namespace App\Http\Controllers;
use App\Models\Users;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
//masih belum siap
//simpan
class SiteController extends Controller
{
    public function register(){
        return view('sites.register');
    }

    public function postregister(Request $request){
       // dd($request->all());

       Users::create([

        'nama_user' => request('nama_user'),
        'email' => request('email'),    
        'password'=>bcrypt('rahasia'),
        'remember_token' => Str::random(10),
   ]);

   return redirect ('/')->with('sukses','Data Berhasil Diinput');
    }
}

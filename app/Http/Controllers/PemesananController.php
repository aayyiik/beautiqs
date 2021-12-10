<?php

namespace App\Http\Controllers;
use App\Models\Pemesanan;
use App\Models\DetailPemesanan;
use App\Models\Users;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index(){
        $pemesanan = Pemesanan::all();
        $users = Users::all();
        // $suppliers= Supplier::all();
        $suppliers= Supplier::orderBy('nama_sup')->get();
        return view('pemesanan.index',['pemesanan' => $pemesanan], compact('users','suppliers'));
    }

    public function update(Request $request){
        Pemesanan::create($request->all());
        DetailPemesanan::create($request->all());
        return redirect('/pemesanan');
    }
    

   
   
}

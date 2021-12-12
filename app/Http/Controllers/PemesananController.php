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
        
        // $barangs = $this->Barang->get();
        // $suppliers = $this->Supplier->get();
        // $detailpesan = ['barangs'=>$barangs,'suppliers'=>$suppliers];
        // \App\Models\DetailPemesanan::create($request->all());
        // Pemesanan::create([

        //     'id_user' => request('id_user'),
        //     'id_supplier' => request('id_supplier'),
        //     'tgl_pesan' => request('tgl_pesan'),
        //     'status_pesan' => request('1'),
        // ]);
        // // Pemesanan::create($request->all());
        // // DetailPemesanan::create($request->all());
        // // return redirect('/pemesanan');
        // redirect('/pemesanan');
        dd($request->all());
    }
    

    // public function update (Request $request,$id){
    //     $detailpesan = \App\Models\DetailPemesanan::get($id);
    //     $detailpesan->update($request->all());
    //     return redirect('/ukuran')->with('sukses','Data Berhasil diupdate');
    // }
   
}

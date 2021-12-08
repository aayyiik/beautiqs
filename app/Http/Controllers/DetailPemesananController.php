<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Barang;
use App\Models\Users;
use App\Models\Supplier;
use App\Models\DetailPemesanan;

class DetailPemesananController extends Controller
{
    
    public function index(){
        $detailpesan = DetailPemesanan::all();
        $barangs = Barang::all();
        $pemesanan = Pemesanan::all();
        $users = Users::all();
        $suppliers= Supplier::all();
        return view('detail_pemesanan.index',['detailpesan' => $detailpesan],compact('users','suppliers','barangs','pemesanan'));
        // return ('detail_pemesanan.index',['barang'=>Barang::with('pemesanan')->get()]);
      
     
        }
    
    public function store (Request $request){
 
      DetailPemesanan::create($request->all());
      return redirect('pemesanan/datapemesanan');
       
     }

    public function destroy ($id){
        $detailpesan = \App\Models\DetailPemesanan::find($id);
        $detailpesan->delete($detailpesan);
        return redirect('/pemesanan/datapemesanan')->with('sukses','Data Berhasil dihapus');
    }
    
}

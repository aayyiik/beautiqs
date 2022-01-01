<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Barang;
use App\Models\Users;
use App\Models\Supplier;
use App\Models\DetailPemesanan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class DetailPemesananController extends Controller
{
    
//     public function index(){
     

//         $detailpesan = DetailPemesanan::all();
//         $barangs = Barang::all();
//         $pemesanan = Pemesanan::all();
//         $users = Users::all();
//         $suppliers= Supplier::all();
//         return view('detail_pemesanan.index',['detailpesan' => $detailpesan],compact('id_pesan','users','suppliers','barangs','pemesanan'));
//         // return ('detail_pemesanan.index',['barang'=>Barang::with('pemesanan')->get()]);
      
     
//         }

    


//     public function store (Request $request){
   
//     // DetailPemesanan::create($request->all());
//     $id_pesan = $request->id_pesan;
  
//     DetailPemesanan::create([

//         'id_pesan' => request('id_pesan'),
//         'kode_barang' => request('kode_barang'),
//         'jumlah_up' => request('jumlah_up'),
//         'harga_up'=>request('harga_up'),
//    ]);
//     return redirect('pemesanan/datapemesanan');


//     // dd($request->all());
       
//      }

//     public function destroy ($id){
//         $detailpesan = \App\Models\DetailPemesanan::find($id);
//         $detailpesan->delete($detailpesan);
//         return redirect('/pemesanan/datapemesanan')->with('sukses','Data Berhasil dihapus');
//     }
    
    

//         public function update(Request $request){
          
//             // $detailpesan = \App\Models\DetailPemesanan::where('id_user',Auth::user()->id_user);
//             $tgl_pesan = date('Y-m-d');
//             $id_pesan = $request->id_pesan;
//             $barangs = $request->barangs;
        
//             //simpan ke database pemesanan
//             $pemesanan = new Pemesanan;
//             $pemesanan->tgl_pesan = $tgl_pesan;
//             $pemesanan->id_user = Auth::user()->id_user;
//             $pemesanan->id_sup = $request->id_sup;
//             $pemesanan->status_pesan = 0;
//             $pemesanan->id_pesan = $id_pesan;
//             $pemesanan->save();

//             $detailpesan = DetailPemesanan::all();
          
//             // $detailpesan=DetailPemesanan::all();
//             // $pemesanan=Pemesanan::all();
 
//             return redirect('/pemesanan',)->with('sukses','Data Berhasil ditambahkan');

//         }
        // public function update(Request $request){
        //     // $detailpesan = \App\Models\DetailPemesanan::find($id);
        //     // $detailpesan->update($detailpesan);
        //     // $barangs = $this->Barang->get();
        //     // $suppliers = $this->Supplier->get();
        //     // $detailpesan = ['barangs'=>$barangs,'suppliers'=>$suppliers];
        //     // // Pemesanan::create($request->all());
        //     // DetailPemesanan::create($request->all());
        //     // return redirect('/pemesanan');
        //     $detailpesan   =   Pemesanan::updateOrCreate(['id' => $id],
        //     [
        //         'kode_rekmed' => $request->kode_rekmed,
        //         'kode_register' => $request->kode_register,
        //         'kd_obat' => $request->kd_obat,
        //         'kuantitas' => $request->kuantitas,
        //         'subtotal' => $request->kuantitas*$request->harga,
        //     ]);
        //     redirect('/pemesanan');
        // }
        
      
        
}


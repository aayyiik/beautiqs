<?php

namespace App\Http\Controllers;
use App\Models\Barang;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() {


        $barangs = Barang::all();
        return view('barang.index',['barangs' => $barangs]);
    }

   
    public function create (Request $request){
     
      \App\Models\Barang::create($request->all());
      return redirect('/barang');
  }

  public function edit ($kode_barang){
      $barang = \App\Models\Barang::find($kode_barang);
      return view('barang/edit',['barang' => $barang]);
  }

  public function update (Request $request,$kode_barang){
      $barang = \App\Models\Barang::find($kode_barang);
      $barang->update($request->all());
      return redirect('/barang')->with('sukses','Data Berhasil diupdate');
  }

  public function delete ($kode_barang){
      $barang = \App\Models\Barang::find($kode_barang);
      $barang->delete($barang);
      return redirect('/barang')->with('sukses','Data Berhasil dihapus');
  }
    
}

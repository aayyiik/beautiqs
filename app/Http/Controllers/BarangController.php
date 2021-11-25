<?php

namespace App\Http\Controllers;
use App\Models\Barang;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() {


        $barangs = Barang::paginate(10);
        return view('barang.index',['barangs' => $barangs]);
    }

   
    public function create (Request $request){
        $this->validate($request,[
            'nama_barang' => 'required|max:100',
            'id_jb' => 'required',
            'stok' => 'required',
            'harga_beli_barang' => 'required',
            'harga_jual_barang' => 'required',


        ]);
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

  public function trash(){
    $barang = Barang::onlyTrashed()->get();
    return view('barang.trash',['barang' => $barang]);
}

public function restore($kode_barang = null){
    if($kode_barang != null){
        $barang = Barang::onlyTrashed()
        ->where('kode_barang', $kode_barang)
        ->restore();
    }
    return redirect('barang/trash')->with('sukses','Data Berhasil direstore');
}

public function forceDelete($kode_barang = null){
    if($kode_barang != null){
        $barang = Barang::onlyTrashed()
        ->where('kode_barang', $kode_barang)
        ->forceDelete();
    }
    return redirect('barang/trash')->with('sukses','Data Berhasil dihapus permanen');
}
    
}

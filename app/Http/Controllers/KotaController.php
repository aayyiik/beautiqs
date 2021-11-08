<?php

namespace App\Http\Controllers;
use App\Models\Kota;

use Illuminate\Http\Request;

class KotaController extends Controller
{

    public function index(Request $request) {
        //if($request->has('cari')){
      //      $kotas = Kota::where('kota','LIKE','%',$request->cari,'%')->get();
      //  }else{
     //       $kotas = Kota::all();
     //   }
       $kotas = Kota::paginate(10);
//  $kotas = Kota::onlyTrashed()->get();
        return view('kota.index',['kotas' => $kotas]);
    }

    public function create (Request $request){
        \App\Models\Kota::create($request->all());
        return redirect ('/kota')->with('sukses','Data Berhasil Diinput');
          
    }

    public function edit ($id_kota){
        $kota = \App\Models\Kota::find($id_kota);
        return view('kota/edit',['kota' => $kota]);
    }

    public function update (Request $request,$id_kota){
        $kota = \App\Models\Kota::find($id_kota);
        $kota->update($request->all());
        return redirect('/kota')->with('sukses','Data Berhasil diupdate');
    }

    public function delete ($id_kota){
        $kota = \App\Models\Kota::find($id_kota);
        $kota->delete($kota);
        return redirect('/kota')->with('sukses','Data Berhasil dihapus');
    }

    public function trash(){
        $kotas = Kota::onlyTrashed()->get();
        return view('kota.trash',['kotas' => $kotas]);
    }

    public function restore($id_kota = null){
        if($id_kota != null){
            $kotas = Kota::onlyTrashed()
            ->where('id_kota', $id_kota)
            ->restore();
        }
        return redirect('kota/trash')->with('sukses','Data Berhasil direstore');
    }

    public function forceDelete($id_kota = null){
        if($id_kota != null){
            $kotas = Kota::onlyTrashed()
            ->where('id_kota', $id_kota)
            ->forceDelete();
        }
        return redirect('kota/trash')->with('sukses','Data Berhasil dihapus permanen');
    }
    
}

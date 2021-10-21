<?php

namespace App\Http\Controllers;
use App\Models\Kota;

use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function index(Request $request) {
        if($request->has('cari')){
            $kotas = Kota::where('kota','LIKE','%',$request->cari,'%')->get();
        }else{
            $kotas = Kota::all();
        }
        $kotas = Kota::all();
        return view('kota.index',['kotas' => $kotas]);
    }

    public function create (Request $request){
        \App\Models\Kota::create($request->all());
        return redirect ('/kota')->with('sukses','Data Berhasil Diinput');
     //   return $request -> all();
      //  return view('kota.create');
    }

    public function edit ($id){
        $kota = \App\Models\Kota::find($id);
        return view('kota/edit',['kota' => $kota]);
    }

    public function update (Request $request,$id){
        $kota = \App\Models\Kota::find($id);
        $kota->update($request->all());
        return redirect('/kota')->with('sukses','Data Berhasil diupdate');
    }

    public function delete ($id){
        $kota = \App\Models\Kota::find($id);
        $kota->delete($kota);
        return redirect('/kota')->with('sukses','Data Berhasil dihapus');
    }
}

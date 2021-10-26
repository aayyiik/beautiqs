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

}

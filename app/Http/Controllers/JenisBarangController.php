<?php

namespace App\Http\Controllers;

use App\Models\JenisBarang;

use Illuminate\Http\Request;

class JenisBarangController extends Controller
{
    public function index() {
        $jenisbarangs = JenisBarang::all();
        return view('jenisbarang.index',['jenisbarangs' => $jenisbarangs]);
}
public function create (Request $request){
    \App\Models\JenisBarang::create($request->all());
    return redirect ('/jenisbarang')->with('sukses','Data Berhasil Diinput');
 //   return $request -> all();
  //  return view('kota.create');
}

}

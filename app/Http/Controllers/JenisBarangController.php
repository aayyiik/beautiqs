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

}

public function edit ($id_jb){
    $jenisbarang = \App\Models\JenisBarang::find($id_jb);
    return view('jenisbarang/edit',['jenisbarang' => $jenisbarang]);
}

public function update (Request $request,$id_jb){
    $jenisbarang = \App\Models\JenisBarang::find($id_jb);
    $jenisbarang->update($request->all());
    return redirect('/jenisbarang')->with('sukses','Data Berhasil diupdate');
}

public function delete ($id_jb){
    $jenisbarang = \App\Models\JenisBarang::find($id_jb);
    $jenisbarang->delete($jenisbarang);
    return redirect('/jenisbarang')->with('sukses','Data Berhasil dihapus');
}



}

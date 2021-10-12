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

  //  public function create (Request $request)
  // {
     
    //\App\Models\Barang::create($request->all());
  //  }
    public function create (Request $request){
        \App\Models\Barang::create($request->input());
        
    }
    
}

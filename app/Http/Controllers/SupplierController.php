<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index() {
        $suppliers = Supplier::all();
        return view('supplier.index',['suppliers' => $suppliers]);
    }

    public function create(Request $request){
        \App\Models\Supplier::create($request->all());
        return redirect ('/supplier')->with('sukses','Data Berhasil Diinput'); 
    }
   
   
         
  //  public function edit ($id_sup){
  //      $supplier = \App\Models\Supplier::find($id_sup);
  //      return view('supplier/edit',['supplier' => $supplier]);
  //  }

  //  public function update (Request $request,$id_sup){
 //       $supplier = \App\Models\Supplier::find($id_sup);
  //      $supplier->update($request->all());
  //      return redirect('/supplier')->with('sukses','Data Berhasil diupdate');
 //   }

 //   public function delete ($id_sup){
   //     $supplier = \App\Models\Supplier::find($id_sup);
  //      $supplier->delete($supplier);
  //      return redirect('/supplier')->with('sukses','Data Berhasil dihapus');
 //   }
}

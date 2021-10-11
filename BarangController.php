<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Barang;
class BarangController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = M_Barang::all();
        return view('index')->with([
            'data' => $data  
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('create');

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function store(Request $request){
        $data = $request->except(['_token']);
        //$data ['created_by'] = \Auth::user()->id;
        //$data ['created_by'] = date('Y-m-d H:i:s');
        M_Barang::insert($data);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $Kode_Barang
     * @return \Illuminate\Http\Response
     */
    function show($id)
    {
        $data = M_Barang::findOrfail($Kode_Barang);
        return view('show')->with([
            'data' => $data
        ]);
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function destroy($id)
    {
        //
    }
}
}
<?php

namespace App\Http\Controllers;
use App\Models\Pemesanan;
use App\Models\Users;
use App\Models\Kota;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index(){
        $pemesanan = Pemesanan::all();
        $users = Users::all();
        $kotas= Kota::all();
        return view('pemesanan.index',['pemesanan' => $pemesanan], compact('users','kotas'));
    }

    public function create(){
        $pemesanan = Pemesanan::all();
        return view('pemesanan.create',['pemesanan' => $pemesanan]);
    }
}

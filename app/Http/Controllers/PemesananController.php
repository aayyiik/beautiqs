<?php

namespace App\Http\Controllers;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index(){
        $pemesanan = Pemesanan::paginate(10);
        return view('pemesanan.index',['pemesanan' => $pemesanan]);
    }
}

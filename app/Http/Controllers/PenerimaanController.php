<?php

namespace App\Http\Controllers;

use App\Models\Penerimaan;
use App\Models\Supplier;
use App\Models\Users;
use Illuminate\Http\Request;

class PenerimaanController extends Controller
{
    public function index(){

        $terima = Penerimaan::all();
        $suppliers = Supplier::all();
        $user = Users::all();
        return view ('penerimaan.index', ['terima'=> $terima], compact('suppliers','user'));
    }
}
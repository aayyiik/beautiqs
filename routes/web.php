<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\UkuranController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SupplierController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


// home
//dashboard
Route::get('/dashboard',[DashboardController::class,'index']);
//Route::get('/dashboard',[AdminController::class,'dashboard']);

//log in
Route::get('/login',[AuthController::class,'login'] );
Route::post('/postlogin',[AuthController::class,'postlogin'] );

Route::get('/barang',[BarangController::class,'index']);
Route::get('/barang/create',[BarangController::class,'create']) ;
Route::get('barang/{kode_barang}/edit', [BarangController::class,'edit']);
Route::post('barang/{kode_barang}/update', [BarangController::class,'update']);
Route::get('barang/{kode_barang}/delete', [BarangController::class,'delete']);
//Route::get('/barang/create',[BarangController::class,'create']);
//Route::get('/barang/{barang}', 'BarangController@create');
//Route::get('/kota','KotaController@index');

//kota
Route::get('/kota',[KotaController::class,'index'] );
Route::get('/kota/create',[KotaController::class,'create']) ;
Route::get('kota/{id}/edit', [KotaController::class,'edit']);
Route::post('kota/{id}/update', [KotaController::class,'update']);
Route::get('kota/{id}/delete', [KotaController::class,'delete']);

//jenis barang
Route::get('/jenisbarang',[JenisBarangController::class,'index']);
Route::get('/jenisbarang/create',[JenisBarangController::class,'create']) ;
Route::get('jenisbarang/{id_jb}/edit', [JenisBarangController::class,'edit']);
Route::post('jenisbarang/{id_jb}/update', [JenisBarangController::class,'update']);
Route::get('jenisbarang/{id_jb}/delete', [JenisBarangController::class,'delete']);

//ukuran
Route::get('/ukuran',[UkuranController::class,'index'] );
Route::get('/Ukuran/create',[UkuranController::class,'create']) ;
Route::get('ukuran/{id_ukuran}/edit', [UkuranController::class,'edit']);
Route::post('ukuran/{id_ukuran}/update', [UkuranController::class,'update']);
Route::get('ukuran/{id_ukuran}/delete', [UkuranController::class,'delete']);

//supplier
Route::get('/supplier',[SupplierController::class,'index'] );
Route::get('/supplier/create',[SupplierController::class,'create']);
Route::get('supplier/{id_sup}/edit', [SupplierController::class,'edit']);
Route::post('supplier/{id_sup}/update', [SupplierController::class,'update']);
Route::get('supplier/{id_sup}/delete', [SupplierController::class,'delete']);

//role
Route::get('/role','RoleController@index');
Route::get('role/{id_role}/edit', [RoleController::class,'edit']);
Route::post('role/{id_role}/update', [RoleController::class,'update']);
Route::get('role/{id_role}/delete', [RoleController::class,'delete']);

Route::get('/penerimaan','penerimaanController@index');
Route::get('/pembayaran','PembayaranController@index');
Route::get('/pemesanan','PemesananController@index');
Route::get('/warna','WarnaController@index');



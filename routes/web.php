<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/barang','BarangController@index');
//kota
Route::get('/kota',[KotaController::class,'index'] );
Route::get('/kota/create',[KotaController::class,'create']) ;
Route::get('kota/{id}/edit', [KotaController::class,'edit']);
Route::post('kota/{id}/update', [KotaController::class,'update']);
Route::get('kota/{id}/delete', [KotaController::class,'delete']);

Route::get('/supplier','SupplierController@index');
Route::get('/role','RoleController@index');
Route::get('/login','LoginController@index');
Route::get('/jenisbarang','JenisBarangController@index');
Route::get('/role','RoleController@index');
Route::get('/jenisbarang','JenisBarangController@index');
Route::get('/penerimaan','penerimaanController@index');
Route::get('/pembayaran','PembayaranController@index');
Route::get('/pemesanan','PemesananController@index');
Route::get('/ukuran','UkuranController@index');
Route::get('/warna','WarnaController@index');

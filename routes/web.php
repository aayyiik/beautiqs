<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\JenisBarangController;


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

Route::get('/dashboard', function () {
    return view('layouts/master');
});

// home
//Route::get('/dashboard',[AdminController::class,'dashboard']);

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
Route::get('/jenisbarang','JenisBarangController@index');
Route::get('/jenisbarang/create',[JenisBarangController::class,'create']) ;
Route::get('jenisbarang/{id_jb}/edit', [JenisBarangController::class,'edit']);
Route::post('jenisbarang/{id_jb}/update', [JenisBarangController::class,'update']);
Route::get('jenisbarang/{id_jb}/delete', [JenisBarangController::class,'delete']);

Route::get('/supplier','SupplierController@index');
Route::get('/role','RoleController@index');
Route::get('/login','LoginController@index');

Route::get('/role','RoleController@index');
Route::get('/jenisbarang','JenisBarangController@index');
Route::get('/penerimaan','penerimaanController@index');
Route::get('/pembayaran','PembayaranController@index');
Route::get('/pemesanan','PemesananController@index');
Route::get('/ukuran','UkuranController@index');
Route::get('/warna','WarnaController@index');


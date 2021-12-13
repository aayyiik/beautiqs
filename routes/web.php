<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\UkuranController;
use App\Http\Controllers\WarnaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\DetailPemesananController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PenerimaanController;

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
Route::get('/register',[SiteController::class,'register'] )->name('register');
Route::post('/postregister',[SiteController::class,'postregister'] );

//log in
Route::get('/login',[AuthController::class,'login'] )->name('login');
Route::post('/postlogin',[AuthController::class,'postlogin'] );
Route::get('/logout',[AuthController::class,'logout'] );

//dashboard
//Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');
//Route::get('/dashboard',[AdminController::class,'dashboard']);

Route::group(['middleware' => ['auth','checkRole:2']], function(){
//users buatan sendiri
Route::get('/users',[UserController::class,'index'] );
Route::get('/users/create',[UserController::class,'create']) ;
Route::get('users/{id_user}/edit', [UserController::class,'edit']);
Route::post('users/{id_user}/update', [UserController::class,'update']);
Route::get('users/{id_user}/delete', [UserController::class,'delete']);
Route::get('users/trash',[UserController::class,'trash']);
Route::get('users/{id_user}/restore',[UserController::class,'restore']);
Route::get('users/{id_user}/forceDelete', [UserController::class,'forceDelete']);

//role
Route::get('/role','RoleController@index');
Route::get('/role/create',[RoleController::class,'create']);
Route::get('role/{id_role}/edit', [RoleController::class,'edit']);
Route::post('role/{id_role}/update', [RoleController::class,'update']);
Route::get('role/{id_role}/delete', [RoleController::class,'delete']);
Route::get('role/trash',[RoleController::class,'trash']);
Route::get('role/{id_sup}/restore',[RoleController::class,'restore']);
Route::get('role/{id_sup}/forceDelete', [RoleController::class,'forceDelete']);

//pembayaran
Route::get('/pembayaran','PembayaranController@index');
Route::get('/pembayaran/create',[PembayaranController::class,'create']);

});


Route::group(['middleware' => ['auth','checkRole:1']], function(){
//pemesanan
Route::get('/pemesanan',[PemesananController::class,'index']);
// Route::get('pemesanan/update',[PemesananController::class,'update']);
// Route::get('/transaksi',[TransaksiController::class,'index']);

//detail pemesanan
Route::get('/pemesanan/datapemesanan',[DetailPemesananController::class,'index']);
Route::get('/pemesanan/store',[DetailPemesananController::class,'store']);
Route::get('pemesanan/{id}/cancel',[DetailPemesananController::class,'destroy']);
Route::get('pemesanan/update',[DetailPemesananController::class,'update']);

//penerimaan
Route::get('/penerimaan',[PenerimaanController::class,'index']);
});



Route::group(['middleware' => ['auth','checkRole:1,2']], function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');

    //barang
Route::get('/barang',[BarangController::class,'index']);
Route::get('/barang/cari',[BarangController::class,'cari']);
Route::get('/barang/create',[BarangController::class,'create']) ;
Route::get('barang/{kode_barang}/edit', [BarangController::class,'edit']);
Route::post('barang/{kode_barang}/update', [BarangController::class,'update']);
Route::get('barang/{kode_barang}/delete', [BarangController::class,'delete']);
Route::get('barang/trash',[BarangController::class,'trash']);
Route::get('barang/{kode_barang}/restore',[BarangController::class,'restore']);
Route::get('barang/{kode_barang}/forceDelete', [BarangController::class,'forceDelete']);
//Route::get('/barang/create',[BarangController::class,'create']);
//Route::get('/barang/{barang}', 'BarangController@create');
//Route::get('/kota','KotaController@index');

//kota
Route::get('/kota',[KotaController::class,'index'] );
Route::get('/kota/cari',[KotaController::class,'cari']);
Route::get('/kota/create',[KotaController::class,'create']) ;
Route::get('kota/{id_kota}/edit', [KotaController::class,'edit']);
Route::post('kota/{id_kota}/update', [KotaController::class,'update']);
Route::get('kota/{id_kota}/delete', [KotaController::class,'delete']);
Route::get('kota/trash',[KotaController::class,'trash']);
Route::get('kota/{id_kota}/restore',[KotaController::class,'restore']);
Route::get('kota/{id_kota}/forceDelete', [KotaController::class,'forceDelete']);


//jenis barang
Route::get('/jenisbarang',[JenisBarangController::class,'index']);
Route::get('/jenisbarang/create',[JenisBarangController::class,'create']) ;
Route::get('jenisbarang/{id_jb}/edit', [JenisBarangController::class,'edit']);
Route::post('jenisbarang/{id_jb}/update', [JenisBarangController::class,'update']);
Route::get('jenisbarang/{id_jb}/delete', [JenisBarangController::class,'delete']);
Route::get('jenisbarang/trash',[JenisBarangController::class,'trash']);
Route::get('jenisbarang/{id_jb}/restore',[JenisBarangController::class,'restore']);
Route::get('jenis barang/{id_jb}/forceDelete', [JenisBarangController::class,'forceDelete']);

//ukuran
Route::get('/ukuran',[UkuranController::class,'index'] );
Route::get('/ukuran/create',[UkuranController::class,'create']) ;
Route::get('ukuran/{id_ukuran}/edit', [UkuranController::class,'edit']);
Route::post('ukuran/{id_ukuran}/update', [UkuranController::class,'update']);
Route::get('ukuran/{id_ukuran}/delete', [UkuranController::class,'delete']);

//supplier
Route::get('/supplier',[SupplierController::class,'index'] );
Route::get('/supplier/create',[SupplierController::class,'create']);
Route::get('supplier/{id_sup}/edit', [SupplierController::class,'edit']);
Route::post('supplier/{id_sup}/update', [SupplierController::class,'update']);
Route::get('supplier/{id_sup}/delete', [SupplierController::class,'delete']);
Route::get('supplier/trash',[SupplierController::class,'trash']);
Route::get('supplier/{id_sup}/restore',[SupplierController::class,'restore']);
Route::get('supplier/{id_sup}/forceDelete', [SupplierController::class,'forceDelete']);


//warna
Route::get('/warna',[WarnaController::class,'index'] );
Route::get('/warna/create',[WarnaController::class,'create']) ;
Route::get('warna/{id_warna}/edit', [WarnaController::class,'edit']);
Route::post('warna/{id_warna}/update', [WarnaController::class,'update']);
Route::get('warna/{id_warna}/delete', [WarnaController::class,'delete']);


});
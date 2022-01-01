<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DetailPemesanan extends Model
{
    use HasFactory;

    protected $table = "detail_pemesanan";
    
    protected $fillable = ['id_pesan','kode_barang','jumlah_up','harga_up'];

    // public static function kode()
    // {
    // 	$kode = DB::table('detail_pemesanan')->max('id_pesan');
    // 	$addNol = '';
    // 	$kode = str_replace("111", "", $kode);
    // 	$kode = (int) $kode + 1;
    //     $incrementKode = $kode;

    // 	if (strlen($kode) == 1) {
    // 		$addNol = "000";
    // 	} elseif (strlen($kode) == 2) {
    // 		$addNol = "00";
    // 	} elseif (strlen($kode == 3)) {
    // 		$addNol = "0";
    // 	}

    // 	$kodeBaru = "111".$addNol.$incrementKode;
    // 	return $kodeBaru;
   // }

  public function barang() {
    return $this->belongsTo(Barang::class, 'kode_barang');
  }
  public function pemesanan() {
    return $this->belongsTo(Pemesanan::class, 'id','id_pesan');
  }

  static function tambah_id_detail($kode_barang, $id_pesan, $jumlah_up, $harga_up){
    DetailPemesanan::create([
      "kode_barang" => $kode_barang,
      "id_pesan" => $id_pesan,
      "jumlah_up" => $jumlah_up,
      "harga_up"=> $harga_up,
    ]);
  }

  
}

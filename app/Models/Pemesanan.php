<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Pemesanan extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pesan';
    protected $fillable = [
        'id_pesan',
        'id_user',
        'id_sup',
        'tgl_pesan',
        'status_pesan'
    ];

    // public static function kode()
    // {
    // 	$kode = DB::table('pemesanan')->max('id_pesan');
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

    

    public function user() {
        return $this->belongsTo(Users::class, 'id_user');
    }

    public function supplier() {
        return $this->belongsTo(Supplier::class, 'id_sup');
    }

    public function detail_pemesanan(){
        return $this->hasMany(DetailPemesanan::class, 'id','id_pesan','kode_barang');
    }
}

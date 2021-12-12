<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'barang';
    protected $primaryKey = 'kode_barang';
    protected $fillable = ['kode_barang','nama_barang','id_jb','stok','harga_beli_barang','harga_jual_barang'];

   public function jenis_barang()
   {
       return $this->belongsTo(JenisBarang::class,'id_jb');
   }

   public function detail_pemesanan(){
    return $this->hasMany(DetailPemesanan::class, 'id','kode_barang');
}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $primaryKey = 'kode_barang';
    protected $fillable = ['kode_barang','nama_barang','attribute_stok_barang29','harga_beli_barang','harga_jual_barang'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class M_Barang extends Model
{
    use softDeletes;

    protected $table = 'Barang';
    protected $fillable = [
        'Kode Barang',
        'Nama Barang',
        'Atribut_Stock_Barang29',
        'Harga_Beli_Barang',
        'Harga_Jual_Barang'
    ];
    protected $hidden;
}

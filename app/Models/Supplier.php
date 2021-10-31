<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'supplier';
    protected $primaryKey = 'id_sup';
    protected $fillable = ['id_sup','id_kota','nama_sup','alamat_sup','telp_sup'];
}

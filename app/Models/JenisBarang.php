<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class JenisBarang extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'jenis_barang';
    protected $primaryKey = 'id_jb';
    protected $fillable = ['id_jb','jenis_barang'];

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }

}

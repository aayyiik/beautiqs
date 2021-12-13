<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    use HasFactory;
    protected $table = 'penerimaan';
    protected $primaryKey = 'id_terima';
    protected $fillable = ['id_terima','id_sup','id_user','tgl_terima','total_harga','status_terima'];

    public function user() {
        return $this->belongsTo(Users::class, 'id_user');
    }

    public function supplier() {
        return $this->belongsTo(Supplier::class, 'id_sup');
    }

}

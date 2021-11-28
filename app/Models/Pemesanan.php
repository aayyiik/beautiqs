<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
}

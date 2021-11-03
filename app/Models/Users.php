<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Users extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $fillable = [
        'id_user',
        'id_kota',
        'id_role',
        'nama_user',
        'alamat_user',
        'no_telp_user',
        'username',
        'password',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    use HasFactory;
}
// Schema::create('penerimaan', function (Blueprint $table) {
//     $table->bigIncrements('id_terima');
//     $table->unsignedBigInteger('id_user')->unsigned();
//     $table->unsignedBigInteger('id_sup')->unsigned();
//     $table->date('tgl_terima');
//     $table->integer('total_harga');
//     $table->integer('status_terima')->default(1);
//     $table->timestamps();

//     $table->foreign('id_user')->references('id_user')->on('user');
//     $table->foreign('id_sup')->references('id_sup')->on('supplier');
// });
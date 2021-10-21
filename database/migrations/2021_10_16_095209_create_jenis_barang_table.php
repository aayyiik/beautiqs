<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_barang', function (Blueprint $table) {
            $table->increments('id_jb');
            $table->unsignedBigInteger('kode_barang')->unsigned();
              $table->foreign('kode_barang')
                ->references('kode_barang')->on('barang')
                ->onDelete('cascade');
            $table->string('jenis_barang');
            $table->timestamps();

           
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenis_barang');
        Schema::dropIfExists('barang');
    }
}

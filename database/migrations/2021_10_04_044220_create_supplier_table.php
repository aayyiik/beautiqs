<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->bigIncrements('id_sup');
            $table->unsignedBigInteger('id_kota')->unsigned();
              $table->foreign('id_kota')
                ->references('id_kota')->on('kota')
                ->onDelete('cascade');
            $table->string('nama_sup');
            $table->string('alamat_sup');
            $table->integer('telp_sup');
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
        Schema::dropIfExists('supplier');
        Schema::dropIfExists('kota');

    }
}

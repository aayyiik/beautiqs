<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->bigIncrements('id_pesan');
            $table->unsignedBigInteger('id_sup')->unsigned();
            $table->foreign('id_sup')
            ->references('id_sup')->on('supplier')
            ->onDelete('cascade');

            $table->unsignedBigInteger('id')->unsigned();
            $table->foreign('id')
            ->references('id')->on('users')
            ->onDelete('cascade');
            
            $table->date('tgl_pesan');
            $table->string('status_pesan');
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
        Schema::dropIfExists('pemesanan');
        Schema::dropIfExists('users');
        Schema::dropIfExists('supplier');
    }

    
}

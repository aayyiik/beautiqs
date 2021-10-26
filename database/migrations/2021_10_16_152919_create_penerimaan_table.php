<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerimaan', function (Blueprint $table) {
            $table->bigIncrements('id_terima');
            $table->unsignedBigInteger('id')->unsigned();
            $table->foreign('id')
              ->references('id')->on('users')
              ->onDelete('cascade');
            $table->unsignedBigInteger('id_sup')->unsigned();
            $table->foreign('id_sup')
              ->references('id_sup')->on('supplier')
              ->onDelete('cascade');
              $table->date('tanggal_terima');
              $table->integer('total_harga');
              $table->string('status_terima');
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
        Schema::dropIfExists('penerimaan');
        Schema::dropIfExists('users');
        Schema::dropIfExists('supplier');
    }
}

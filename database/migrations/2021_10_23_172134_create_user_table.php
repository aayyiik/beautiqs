<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id_user');
            $table->unsignedBigInteger('id_kota')->unsigned();
              $table->foreign('id_kota')
                ->references('id_kota')->on('kota')
                ->onDelete('cascade');
                $table->unsignedBigInteger('id_role')->unsigned();
                $table->foreign('id_role')
                  ->references('id_role')->on('role')
                  ->onDelete('cascade');
            $table->string('nama_user');
            $table->string('alamat_user');
            $table->string('no_telp_user');
            $table->string('username');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('user');
    }
}

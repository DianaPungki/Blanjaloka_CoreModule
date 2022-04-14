<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengelola_pasar', function (Blueprint $table) {
            $table->id('id_pengelola');
            $table->string('nama_pengelola');
            $table->string('alamat_pengelola')->nullable();
            $table->bigInteger('nomor_telepon');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            // $table->unsignedBigInteger('id_role')->nullable();

            $table->timestamps();

            // $table->foreign('id_role')->references('id_role')->on('role')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_pengelola_pasar');
    }
};

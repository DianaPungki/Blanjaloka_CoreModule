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
        Schema::create('pasar', function (Blueprint $table) {
            $table->id('id_pasar');
            $table->string('nama_pasar', 100);
            $table->text('alamat');
            $table->text('embbed_maps')->nullable();
            $table->text('foto_pasar')->nullable();
            $table->mediumText('deskripsi')->nullable();
            $table->integer('max_toko')->nullable();
            $table->integer('max_pengunjung')->nullable();
            $table->unsignedBigInteger('id_pengelola')->nullable();
            $table->string('kecamatan', 100)->nullable();
            $table->string('kabupaten', 100)->nullable();
            $table->string('provinsi', 100)->nullable();
            $table->timestamps();
            
            $table->foreign('id_pengelola')->references('id_pengelola')->on('pengelola_pasar')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasar');
    }
};

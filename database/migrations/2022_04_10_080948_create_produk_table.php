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
        Schema::create('produk', function (Blueprint $table) {
            $table->id('id_produk');
            $table->string('nama_produk');
            $table->string('satuan');
            $table->integer('harga_jual');
            $table->bigInteger('jumlah_produk');
            $table->text('deskripsi_produk');
            $table->string('foto_produk', 500);
            $table->string('status_produk');
            $table->unsignedBigInteger('id_kategori');
            $table->unsignedBigInteger('id_pedagang')->nullable();

            $table->timestamps();

            $table->foreign('id_pedagang')->references('id_pedagang')->on('pedagang')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('id_kategori')->references('id_kategori')->on('produk_kategori')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
};

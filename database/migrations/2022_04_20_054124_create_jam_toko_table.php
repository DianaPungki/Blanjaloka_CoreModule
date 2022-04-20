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
        Schema::create('jam_toko', function (Blueprint $table) {
            $table->id('id_jamtoko');
            $table->string('catatan', 200)->nullable();
            $table->string('hari', 100);
            $table->time('buka');
            $table->time('tutup');
            $table->unsignedBigInteger('id_pedagang');
            $table->timestamps();
            
            $table->foreign('id_pedagang')->references('id_pedagang')->on('pedagang')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jam_toko');
    }
};

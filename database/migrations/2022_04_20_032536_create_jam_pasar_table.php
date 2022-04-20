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
        Schema::create('jam_pasar', function (Blueprint $table) {
            $table->id('id_jampasar');
            $table->string('catatan', 200)->nullable();
            $table->string('hari', 100);
            $table->time('buka');
            $table->time('tutup');
            $table->unsignedBigInteger('id_pasar');
            $table->timestamps();
            
            $table->foreign('id_pasar')->references('id_pasar')->on('pasar')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jam_pasar');
    }
};

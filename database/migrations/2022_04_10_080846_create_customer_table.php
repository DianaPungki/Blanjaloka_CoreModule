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
        Schema::create('customer', function (Blueprint $table) {
            $table->id('id_customer');
            $table->string('nama_customer');
            $table->bigInteger('nomor_telepon');
            $table->dateTime('created_otp')->nullable();
            $table->mediumText('token_barrer')->nullable();
            $table->string('alamat_customer')->nullable();
            $table->string('email_customer')->unique();
            $table->string('username')->unique()->nullable();
            $table->string('password');
            // $table->unsignedBigInteger('id_role')->nullable();
            $table->string('otp')->nullable();            
            $table->string('foto')->nullable();            
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();            
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
        Schema::dropIfExists('customer');
    }
};

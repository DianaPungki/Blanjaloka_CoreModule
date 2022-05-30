<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pemda extends  Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'id_pemda';
    public $table = "pemda";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'username',
        'nama_pemda','nomor_telepon',
        'email','alamat_pemda','password',
        'nomor_ktp','id_produk'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'created_at', 'updated_at'

    ];
}

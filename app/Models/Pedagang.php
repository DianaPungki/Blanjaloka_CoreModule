<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedagang extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pedagang';
    public $table = "pedagang";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'nama_pedagang',
        'nomor_telepon',
        'email',
        'alamat_pedagang',
        'password',
        'tanggal_lahir',
        'foto_rekening',
        'nomor_ktp',
        'nama_toko',
        'alamat_toko',
        'id_pasar',
        'no_rekening',
        'bank'
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

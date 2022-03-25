<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class PengelolaPasar extends  Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = "pengelola_pasar";
    protected $primaryKey = 'id_pengelola';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nam_pengelola','alamat_pengelola','nomor_telepon',
        'email','username','password','id_role'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'id_role',  'created_at', 'updated_at'

    ];

     public function role(){
        return $this->belongsTo(Role::class);
    }
}

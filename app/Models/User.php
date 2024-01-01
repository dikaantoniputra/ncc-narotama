<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Mahasiswa;
use App\Models\Pelatihan;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $fillable = [
        'username', 
        'password',
        'name',
        'email', 
        'phone', 
        'role', 
        'status', 
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

   //Relasi tabel mahasiswa
   public function mahasiswa()
   {
    return $this->hasOne(Mahasiswa::class);
   }

   public function admin()
   {
    return $this->hasOne(Admin::class);
   }


   public function pelatihans()
    {
        return $this->belongsToMany(Pelatihan::class, 'peserta', 'mahasiswa_id', 'pelatihan_id')->withTimestamps();
    }

    public function lamaran()
    {
        return $this->belongsToMany(lamaran::class, 'pelamar', 'mahasiswa_id', 'lamaran_id')->withTimestamps();
    }

}

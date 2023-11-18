<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model

{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $fillable = [
        'name', 'email', 'password',
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

    // public function siswa()
    // {
    //     return $this->hasOne(Siswa::class);
    // }

    // public function tentor()
    // {
    //     return $this->hasOne(Tentor::class);
    // }

    // public function pelajaran()
    // {
    //     return $this->hasMany(Pelajaran::class);
    // }

    // public function jadwal()
    // {
    //     return $this->hasMany(Jadwal::class);
    // }

    // public function materi()
    // {
    //     return $this->hasMany(Materi::class);
    // }

    // public function transaksi()
    // {
    //     return $this->hasMany(Transaksi::class);
    // }
}

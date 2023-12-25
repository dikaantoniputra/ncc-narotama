<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $rules = [
        'dokumentasi_pelatihan' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'poster' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kategoripelatihan()
    {
        return $this->belongsTo(KategoriPelatihan::class, 'kategori_pelatihan_id');
    }


    public function peserta()
    {
        return $this->hasMany(Peserta::class);
    }

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }

   

}

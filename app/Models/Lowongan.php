<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $rules = [
        'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kategorilowongan()
    {
        return $this->belongsTo(KategoriLowongan::class, 'kategori_lowongan_id');

    }

    public function lamaran()
    {
        return $this->hasMany(Lamaran::class);
    }



    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }



}

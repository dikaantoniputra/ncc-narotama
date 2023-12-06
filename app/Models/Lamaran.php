<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    use HasFactory;
    protected $guarded = [];

    
    public static $rules = [
        'mahasiswa_id' => 'string',
        'lowongan_id' => 'string',
        'dokumen_riwayat' => 'file|mimes:pdf,doc,docx|max:2048', // Sesuaikan dengan tipe file yang diizinkan dan batas maksimum file
        'dokumen_lamaran' => 'file|mimes:pdf,doc,docx|max:2048',
        'dokumen_transkrip' => 'file|mimes:pdf,doc,docx|max:2048',
        'dokumen_tambahan' => 'file|mimes:pdf,doc,docx|max:2048',
        'status' => 'string',
    ];

    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class, 'lowongan_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'mahasiswa_id');
    }
}
